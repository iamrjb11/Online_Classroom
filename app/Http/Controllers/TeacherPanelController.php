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
    public function create_course(Request $request){
        $c_no = $request->input('c_no');
        $c_name = $request->input('c_name');
        $c_credit = $request->input('c_credit');
        $c_dept = $request->input('c_dept');
        $c_varsity = $request->input('c_varsity');
        $c_term = $request->input('c_term');
        DB::insert("insert into course_list (c_no,c_name,c_credit,c_dept,c_varsity,c_term) values(?,?,?,?,?,?)",[$c_no,$c_name,$c_credit,$c_dept,$c_varsity,$c_term] );
        //return back()->with('success','Image Upload successfully');   
        //Session::put('header_code','1');
        return view('teacher_panel');

    }
}
