@extends('layouts.app')

@section('content')



<form class="" action="/create_quiz" style="padding-left:7%;padding-right:7%" method="post" enctype="multipart/form-data">
  <div style="text-align:center">
    <h1>Course Name : {{ $course_details[0]->c_name }}</h1><br>
    
    <h3>Marks : 10 <span style="padding-left:10%">Time : 10mins</span> </h3><br>
    <h3 >Quiz Name : <input type="text" name="quiz_name" value="" class="" style="width:30%"></h3><br>
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
@for($i=1;$i<=10;$i++)
  <label for="" class="mr-sm-2">{{$i}}.</label>
  <input type="text" class="" placeholder="Question {{$i}}" name="q{{$i}}" style="width:60%"><br>
  <div style="padding:2%">
  
    <input type="radio" name="qq{{$i}}" value="1"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn1"><br>
    <input type="radio" name="qq{{$i}}" value="2"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn2"><br>
    <input type="radio" name="qq{{$i}}" value="3"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn3"><br>
    <input type="radio" name="qq{{$i}}" value="4"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn4"><br>
  </div>
@endfor
<input type="submit" name="createBtn" value="create Quiz" class="btn btn-success" style="width:70%"> 
</form>

@endsection
