@extends('layouts.app')

@section('content')

<h2 style="text-align:center">Quiz Name : <input type="text" name="ques_name" value="" class="" style="width:30%"></h2><br>
<h3>Time : 10mins</h3>
<form class="" action="/action_page.php" style="padding:7%">
@for($i=1;$i<=10;$i++)
  <label for="" class="mr-sm-2">{{$i}}.</label>
  <input type="text" class="" placeholder="Question {{$i}}" id="q{{$i}}" style="width:60%"><br>
  <div style="padding:2%">
  
    <input type="radio" name="q{{$i}}"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn1"><br>
    <input type="radio" name="q{{$i}}"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn2"><br>
    <input type="radio" name="q{{$i}}"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn3"><br>
    <input type="radio" name="q{{$i}}"><input type="text" class="" placeholder="Option 1" name="q{{$i}}_optn4"><br>
  </div>
@endfor
<input type="submit" name="createBtn" value="create Quiz" class="btn btn-success" style="width:70%"> 
</form>

@endsection
