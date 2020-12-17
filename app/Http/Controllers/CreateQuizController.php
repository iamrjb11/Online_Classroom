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
        $course_details = DB::select("select * from course_list where c_id=? ",[$c_id]);

        return view('create_quiz',array('course_details',$course_details));
    }
}
