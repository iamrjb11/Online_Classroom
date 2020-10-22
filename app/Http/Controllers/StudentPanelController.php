<?php

namespace App\Http\Controllers;

use App\User;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // to use Database (DB::select("query"))
use Illuminate\Support\Facades\Input; //to use this Input::get('tag')
use Illuminate\Support\Facades\Redirect; // to use this Redirect::to('url')
use App\Application;
use Auth;

class StudentPanelController extends Controller
{
    ///jokhon student_panel page load hobe
    public function load_student_panel(){
        $teacher_list = DB::select("select t_name from teacher_info order by t_name ");
        
        //only data return korbe...
        //return array('teacher_list'=>$teacher_list);
        return view('student_panel',array('teacher_list'=>$teacher_list));
    }
}
