@extends('layouts.app')

@section('content')

    <h1 style="text-align:center"> WELCOME TO YOUR DASHBOARD</h1>      

<div class="sidenav">
  <p id="sidenavT">Course List<br>-------------</p>
  <a href="#services">C Programming</a>
  
</div>

<div class="main">
<p style="font-size:20px;">Create a Course :</p> 
<form action="/action_page.php" id="borderStyle" >
  <div class="form-group" >
    <input type="email" class="form-control" id="email" placeholder="Course Name" style="weight:70%">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="pwd" placeholder="Course ID">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="pwd" placeholder="Course Credit">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="pwd" placeholder="Department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="pwd" placeholder="University">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="pwd" placeholder="Term">
  </div>

  <button type="submit" style="width:100%" class="btn btn-success">Create</button>
</form>




</div>


@endsection