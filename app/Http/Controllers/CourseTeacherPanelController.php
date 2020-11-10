<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // to use Database (DB::select("query"))
use Illuminate\Support\Facades\Input; //to use this Input::get('tag')
use Illuminate\Support\Facades\Redirect; // to use this Redirect::to('url')
use App\Application;
use Auth;

class CourseTeacherPanelController extends Controller
{
    public function load_course_teacherpanel($c_id){
        $t_id = session()->get('id');
        session()->put('c_id',$c_id);
        $material_list = DB::select("select * from course_materials where t_id=? and c_id=?",[$t_id,$c_id]);
        return view('course_teacherpanel',array('material_list'=>$material_list ));
        //return session()->get('c_id');
    }
    public function upload(Request $request){
        $t_id = session()->get('id');
        $c_id = session()->get('c_id');
        $upload_type = $request->input('m_radio');
        if($upload_type == "material"){
            if( $file = $request->file('m_name') ){
                //$material_name = $request->file('m_name');
                $material_name=$file->getClientOriginalName();
                //$material_path = rand().'.'.$material->getClientOriginalExtension();
                $destinationPath = public_path('/my_files');
                $file->move($destinationPath, $material_name);
                $material_path = "/"."my_files"."/".$material_name;
                //return $material_path;
            
                DB::insert(" insert into course_materials (m_name,m_path,t_id,c_id) value(?,?,?,?) ",[$material_name,$material_path,$t_id,$c_id]);
                
                return redirect()->back();
            }
        }
        // $result = DB::select("select t_dept,t_varsity from teacher_info where t_id=? ",[$t_id]);//
        // $c_no = $request->input('c_no');
        // $c_name = $request->input('c_name');
        // $c_credit = $request->input('c_credit');
        // $c_dept = $result[0]->t_dept;
        // $c_varsity = $result[0]->t_varsity;
        // $c_term = $request->input('c_term');
        // DB::insert("insert into course_list (c_no,c_name,c_credit,c_dept,c_varsity,c_term,t_id) values(?,?,?,?,?,?,?)",[$c_no,$c_name,$c_credit,$c_dept,$c_varsity,$c_term,$t_id] );
        // return back()->with('success','Image Upload successfully');   
        //Session::put('header_code','1');
        //return redirect('/teacher_panel');

    }
}
