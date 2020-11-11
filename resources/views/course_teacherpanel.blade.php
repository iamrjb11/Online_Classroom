@extends('layouts.app')

@section('content')
<h1 style="text-align:center"> {{$course_name[0]->c_name}} </h1>     



<div class="sidenav_coursePanel">
  <p id="sidenavT">Materials<br>--------------------</p>
  @foreach($material_list as $dt)
    <a href="http://127.0.0.1:8000{{$dt->m_path}}">{{$dt->m_name}}</a><br>
  @endforeach 
  
  <p id="sidenavT">Assignments<br>--------------------</p>
  @foreach($assignment_list as $dt)
    <a href="http://127.0.0.1:8000{{$dt->a_path}}">{{$dt->a_name}}</a><br>
  @endforeach 
  <p id="sidenavT">Quiz<br>--------------------</p>
  <a href="" class="btn btn-primary" style="color:white;">Create a Quiz</a>

</div>

<div class="main_coursePanel">
<p style="font-size:20px;">Upload :</p>
  <form method="post" enctype="multipart/form-data" action="/teacher_upload" id="borderStyle" >

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <input type="file" class="form-control" name="m_name">
    </div>
    
      <input type="radio" class="" name="m_radio" value="material"> Material       
      
    
    
      <input type="radio" class="" name="m_radio" value="assignment"> Assignment
      
    
    
    <input type="submit" style="width:100%" class="btn btn-success" value="Upload">
  </form>
</div>


<div class="sidenavR_coursePanel">
  <p id="sidenavT">Notifications</p>
   
  

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Student Image</th>
        <th>Student Details</th>
        <th>Action</th>
      </tr>
    </thead>
   
</div>


@endsection