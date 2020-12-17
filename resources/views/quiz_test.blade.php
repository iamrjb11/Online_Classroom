@extends('layouts.app')

@section('content')

<h2 style="text-align:center">Quiz Name : RR</h2><br>
<form class="" action="/submit_quiz.php" style="padding:7%">
@for($i=0,$j=1;$i< count($data) ;$i++,$j++)

  <label for="" class="mr-sm-2">{{$j}}. {{$data[$i]->q_text}} </label><br>
  <div style="padding:2%">
  
    <input type="radio" name="q{{$i}}"> {{$data[$i]->op_text}} {{$i++}}<br>
    <input type="radio" name="q{{$i}}"> {{$data[$i]->op_text}} {{$i++}} <br>
    <input type="radio" name="q{{$i}}"> {{$data[$i]->op_text}} {{$i++}}<br>
    <input type="radio" name="q{{$i}}"> {{$data[$i]->op_text}} <br>
  </div>

@endfor
<input type="submit" name="createBtn" value="Submit" class="btn btn-success" style="width:70%"> 
</form>

@endsection