@extends('layouts.app')

@section('content')

    <h1 style="text-align:center"> WELCOME TO YOUR DASHBOARD</h1>      

<div class="sidenav">
  <p id="sidenavT">Course List<br>-------------</p>
  <a href="#services">C Programming</a>
  
</div>

<div class="main">
Search Course : 
<form class="form-inline" action="/action_page.php">
  <div class="form-group">
    
  <select id="course_name" class="form-control">
        <option value="">-- Select Course --</option>
  </select>
  </div>
  <div class="form-group">
  <select id="teacher_name" class="form-control">
        <option value="">-- Select Teacher --</option>
        @foreach($teacher_list as $teacher)
        <option value="{{$teacher->t_name}}">{{$teacher->t_name}}</option>
        @endforeach
  </select>
  </div>
  <div class="form-group">
  <select id="varsity" class="form-control">
        <option value="">-- Select University --</option>
  </select>
  </div><br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Course Code</th>
        <th>Course Name</th>
        <th>Course Credit</th>
        <th>Teacher Name</th>
        <th>Teacher Designation</th>
        <th>Department</th>
        <th>University</th>
        <th>Request</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>CSE 1101</td>
        <td>C Programming</td>
        <td>3.00</td>
        <td>Anis Sir</td>
        <td>Professor</td>
        <td>CSE</td>
        <td>KU</td>
        <td><input type="button" value="Request" class="btn btn-primary"></td>

      </tr>
      
    </tbody>
  </table>
  <div>Suggestions : </div>
  <div class="row">
    <div class="col-md-2">
        <div class="thumbnail">
           
            <img src="{{ asset('img/online_course.png') }}" style="width:150px;height: 150px">
            <div class="caption" style="text-align: center;">
                <p>
                    <span id="">C Programming</span><br>
                    <span id="">Anis Sir</span><br>
                    <span id="">Professor</span>,
                    <span id="">CSE</span><br>
                    <span id="">Khulna University</span>
                </p>
                <input id="" type="button" value="Request" class="btn btn-primary">
                
            
            </div>
            
        </div>
    </div>


</div>


</div>


@endsection