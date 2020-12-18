<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //to use Database (DB::select("query"))
use Illuminate\Support\Facades\Input; //to use this Input::get('tag')
use Illuminate\Support\Facades\Redirect; // to use this Redirect::to('url')
use App\Application;
use Auth;

class CreateQuizController extends Controller
{
    public function load_quizpanel($c_id){
        session()->put('c_id',$c_id);
        $course_details = DB::select("select * from course_list where c_id=? ",[$c_id]);

        return view('create_quiz',array('course_details'=>$course_details));
    }
    public function create_quiz(Request $request){
        $c_id = session()->get('c_id');
        $quiz_name = $request->input('quiz_name');
        DB::insert(" insert into quiz_list (quiz_name,c_id) value(?)",[$quiz_name,$c_id]);
        $quiz_id =  DB::select("select count(*) as ID from quiz_list");
        //return $quiz_id[0]->ID;
        for($i=1;$i <= 10;$i++){
            $q_text = $request->input('q'.$i);
            $q_ans = $request->input('qq'.$i);
            DB::insert(" insert into question_list (q_text,q_ans,quiz_id) value(?,?,?)",[$q_text,$q_ans,$quiz_id[0]->ID]);
            $q_id =  DB::select("select count(*) as ID from question_list");
            
            for($j=1;$j <= 4;$j++){
                $op_text = $request->input('q'.$i.'_optn'.$j);
                
                DB::insert(" insert into questions_options (op_text,q_id) value(?,?)",[$op_text,$q_id[0]->ID]);
            
            }
        }
        return redirect()->back();
    }
}
