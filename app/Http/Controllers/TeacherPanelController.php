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

class TeacherPanelController extends Controller
{
    public function load_teacher_panel(){
        $t_id = session()->get('id');
        //return $t_id;
        $course_list = DB::select("select c_name from course_list where t_id=? ",[$t_id]);
        //return $course_list;
        return view('teacher_panel',array('course_list'=>$course_list));

    }
    public function create_course(Request $request){
        $t_id = session()->get('id');
        $result = DB::select("select t_dept,t_varsity from teacher_info where t_id=? ",[$t_id]);//
        $c_no = $request->input('c_no');
        $c_name = $request->input('c_name');
        $c_credit = $request->input('c_credit');
        $c_dept = $result[0]->t_dept;
        $c_varsity = $result[0]->t_varsity;
        $c_term = $request->input('c_term');
        DB::insert("insert into course_list (c_no,c_name,c_credit,c_dept,c_varsity,c_term) values(?,?,?,?,?,?)",[$c_no,$c_name,$c_credit,$c_dept,$c_varsity,$c_term] );
        //return back()->with('success','Image Upload successfully');   
        //Session::put('header_code','1');
        return view('teacher_panel');

    }
}
