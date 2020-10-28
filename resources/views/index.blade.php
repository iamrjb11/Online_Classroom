@extends('layouts.app')

@section('content')

<div style="text-align:center;"> 
<?php
//include "../resources/views/templates/image_slide.php"; ?> 

    <div class="container">

    <div class="w3-container">
    <h2>WELCOME TO ONLINE CLASS ROOM WEBSITE</h2>
    <p>Find your desire courses here. </p>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/online_courses.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/document_share.png" alt="Card image cap" >
                <div class="card-body">
                  <p class="card-text">Documents shared by teachers in an online classroom enrich students learning quality.</p> 
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/online_exam.jpg" alt="Card image cap" >
                <div class="card-body">
                  <p class="card-text">There is no alternative to online exams to understand 
                  how students are learning as a result of teaching in online classes. 
                  So quizzes are very important for a digital classroom.</p> 
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/assignment.jpg" alt="Card image cap" >
                <div class="card-body">
                  <p class="card-text">Assignments enrich the quality of students 
                  knowledge based on relevant reading in a related subject after teaching a specific subject.</p> 
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/video.jpg" alt="Card image cap" >
                <div class="card-body">
                  <p class="card-text">Assignments enrich the quality of students 
                  knowledge based on relevant reading in a related subject after teaching a specific subject.</p> 
                </div>
              </div>
            </div>

            </div>
        </div>
    </div>
    
    </div>
</div>

    
@endsection