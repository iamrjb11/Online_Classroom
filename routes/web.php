<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/login', function () {
    return view('login',['message'=>'']);
});

Route::get('/logout', 'LoginController@logout');

Route::get('/student_panel', 'StudentPanelController@load_student_panel')->middleware('customAUTH');
Route::post('/student_login', 'LoginController@student_login');
Route::post('/teacher_login', 'LoginController@teacher_login');
Route::post('/search_course', 'StudentPanelController@search_course');
Route::get('/teacher_panel', 'TeacherPanelController@load_teacher_panel')->middleware('customAUTH');

Route::post('/create_course','TeacherPanelController@create_course');

Route::post('/signup_teacher','RegistrationController@signup_teacher');
Route::post('/signup_student','RegistrationController@signup_student');