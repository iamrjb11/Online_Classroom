@extends('layouts.app')

@section('content')

<div style="text-align:center">
    <h1>Course Name : </h1>
    <h3 >Quiz Name : </h3><br>
    <h3>Marks : 10 <span style="padding-left:10%">Time : 10mins</span> </h3>
  </div>

<form class="" action="/submit_quiz" style="padding:7%" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@for($i=0,$j=1;$i< count($data) ;$i++,$j++)

  <label for="" class="mr-sm-2">{{$j}}. {{$data[$i]->q_text}} </label>
  <div style="padding-left:2%">
  
    <input type="radio" name="qq{{$j}}" value="1"> {{$data[$i]->op_text}} <input type="hidden" name="_token" value="{{$i++}}"> <br>
    <input type="radio" name="qq{{$j}}" value="2"> {{$data[$i]->op_text}} <input type="hidden" name="_token" value="{{$i++}}"> <br>
    <input type="radio" name="qq{{$j}}" value="3"> {{$data[$i]->op_text}} <input type="hidden" name="_token" value="{{$i++}}"> <br>
    <input type="radio" name="qq{{$j}}" value="4"> {{$data[$i]->op_text}} <br>
  </div><br>

@endfor
<input type="submit" name="createBtn" value="Submit" class="btn btn-success" style="width:70%"> 
</form>

@endsection