<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // to use Database (DB::select("query"))
use Illuminate\Support\Facades\Input; //to use this Input::get('tag')
use Illuminate\Support\Facades\Redirect; // to use this Redirect::to('url')
use App\Application;
use Auth;

class QuizTestController extends Controller
{
    public function load_quiztest($quiz_id){
        $data = DB::select("SELECT * FROM question_list inner JOIN questions_options on question_list.q_id=questions_options.q_id WHERE question_list.quiz_id=?",[$quiz_id]);
    
        return view('quiz_test',array('data'=>$data));
    }
}
