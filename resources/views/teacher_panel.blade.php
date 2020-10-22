@extends('layouts.app')

@section('content')

    <h1 style="text-align:center"> WELCOME TO YOUR DASHBOARD</h1>      

<div class="sidenav">
  <p id="sidenavT">Course List<br>-------------</p>
  <a href="#services">C Programming</a>
  
</div>

<div class="main">
<p style="font-size:20px;">Create a Course :</p> 
<form method="post" enctype="multipart/form-data" action="/create_course" id="borderStyle" >
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="form-group">
    <input type="text" class="form-control" name="c_no" placeholder="Course ID">
  </div>
  <div class="form-group" >
    <input type="text" class="form-control" name="c_name" placeholder="Course Name" style="weight:70%">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="c_credit" placeholder="Course Credit">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="c_dept" placeholder="Department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="c_varsity" placeholder="University">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="c_term" placeholder="Term">
  </div>

  <input type="submit" style="width:100%" class="btn btn-success" value="Create">
</form>




</div>


@endsection