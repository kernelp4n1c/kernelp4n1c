<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['uses'=>'HomeController@index']);

Route::get('teacher/{id}', ['uses'=>'TeacherController@index']);
Route::get('/teachers', ['uses'=>'TeacherController@getTeachers']);
Route::post('teacher/{id}/comment',['uses'=>'TeacherController@comment']);
Route::post('teacher/comment/{id}/like',['uses'=>'TeacherController@like']);
// Route::post('teacher/comment/{id}/dislike',['uses'=>'TeacherController@dislike']);

Route::get('mod/god', ['uses'=>'ModController@login']);
Route::post('mod/god', ['uses'=>'ModController@doLogin']);
Route::get('mod/logout', ['uses'=>'ModController@logout']);

Route::group(['before'=>'auth'],function() {
    Route::get('mod/god/{id}', ['uses'=>'ModController@modTeacher']);
    Route::post('mod/god/update', ['uses'=>'ModController@changePassword']);
    Route::post('mod/god/remove/{id}', ['uses'=>'ModController@removeComment']);
});
