@extends('layouts.app')

@section('content')

    <h1 style="text-align:center"> WELCOME TO YOUR DASHBOARD</h1>      

<div class="sidenav">
  <p id="sidenavT">Course List<br>-------------</p>
  <a href="#services">C Programming</a>
  
</div>

<div class="main">
Search Course : 
<form method="post" enctype="multipart/form-data" class="form-inline" action="/search_course">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="form-group">
    
  <select name="course_name" class="form-control">
        <option value="">-- Select Course --</option>
        @foreach($course_list as $course)
        <option value="{{$course->c_name}}">{{$course->c_name}}</option>
        @endforeach
  </select>
  </div>
  <div class="form-group">
  <select name="teacher_name" class="form-control">
        <option value="">-- Select Teacher --</option>
        @foreach($teacher_list as $teacher)
        <option value="{{$teacher->t_name}}">{{$teacher->t_name}}</option>
        @endforeach
  </select>
  </div>
  <div class="form-group">
  <select name="varsity" class="form-control">
        <option value="">-- Select University --</option>
        @foreach($varsity_list as $varsity)
        <option value="{{$varsity->t_varsity}}">{{$varsity->t_varsity}}</option>
        @endforeach
  </select>
  </div><br>
  <input type="submit" class="btn btn-success" value="Search">
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
    <!-- check the current url reqst is search_course??? -->
  @if(\Request::is('search_course'))
    
  @foreach($search_course as $dt)
      <tr>
        <td>{{ $dt->c_no }}</td>
        <td>{{ $dt->c_name }}</td>
        <td>{{ $dt->c_credit }}</td>
        <td>{{ $dt->t_name }}</td>
        <td>{{ $dt->t_des }}</td>
        <td>{{ $dt->c_dept }}</td>
        <td>{{ $dt->t_varsity }}</td>
        <td><input type="button" value="Request" class="btn btn-primary"></td>

      </tr>
      @endforeach
      @endif
      
    </tbody>
  </table>
  <div>Suggestions : </div>
  <div class="row">
  <!--Array length use count(arrayName) -->
  @for ($i=0;$i< count($course_sugg) ;$i++) 
  @if($i > 6)
  @break;
  @endif
    <div class="col-md-2">
        <div class="thumbnail">
           
            <img src="{{ asset('img/online_course.png') }}" style="width:150px;height: 150px">
            <div class="caption" style="text-align: center;">
                <p>
                    <span id="">{{ $course_sugg[$i]->c_name }}</span><br>
                    <span id="">{{ $course_sugg[$i]->t_name }}</span><br>
                    <span id="">{{ $course_sugg[$i]->t_des }}</span>,
                    <span id="">{{ $course_sugg[$i]->c_dept }}</span><br>
                    <span id="">{{ $course_sugg[$i]->c_varsity }}</span>
                </p>
                <input id="" type="button" value="Request" class="btn btn-primary">
                
            
            </div>
            
        </div>
      
    </div>
   
    @endfor


</div>


@endsection