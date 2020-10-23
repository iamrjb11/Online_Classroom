@extends('layouts.app')

@section('content')

    <h1 style="text-align:center"> WELCOME TO YOUR DASHBOARD</h1>      

<div class="sidenav">
  <p id="sidenavT">Course List<br>-------------</p>
  @foreach($course_list as $dt)
    <a href="#services">{{$dt->c_name}}</a>
  @endforeach  
</div>

<div class="mainT">
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
      <input type="text" class="form-control" name="c_term" placeholder="Term">
    </div>

    <input type="submit" style="width:100%" class="btn btn-success" value="Create">
  </form>
</div>


<div class="sidenavR_T">
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
    <tbody>
    @foreach($noti_list as $dt)
  
    <tr>
        <td>{{$dt->c_name}}</td>
        <td>img</td>
        <td>{{$dt->s_name}} <br>{{$dt->s_dept}},{{$dt->s_varsity}} <br>{{$dt->s_term}}</td>
        <td>
          
        <a class="btn btn-primary" href="{{url('accept_rqst')}}/{{$dt->srl}}/{{$dt->r_sts}}">Accept</a>
        <a class="btn btn-danger" href="{{url('delete_rqst')}}/{{$dt->srl}}">Reject</a>
                        
          


        </td>
      </tr>
      @endforeach 
      
    </tbody>
</div>


@endsection