<?php

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
    return view('welcome');
});

Route::match(['get','post'],'/',['as'=>'web.home.index','uses'=>'Web\HomeController@index']);

/*login*/
Route::match(['get','post'],'/login',['as'=>'web.home.loginDisplay','uses'=>'Web\HomeController@loginDisplay']);
Route::match(['get','post'],'/register',['as'=>'web.home.userRegister','uses'=>'Web\HomeController@userRegister']);
Route::match(['get','post'],'/loginUser',['as'=>'web.home.loginUser','uses'=>'Web\HomeController@loginUser']);
Route::match(['get','post'],'/logout',['as'=>'web.home.logoutUser','uses'=>'Web\HomeController@logoutUser']);
/*login*/

/*job seeker*/
Route::match(['get','post'],'/jobseeker',['as'=>'web.job.index','uses'=>'Web\JobseekerController@index']);
/*job seeker*/

/*Recruiter*/
Route::match(['get','post'],'/recruiter',['as'=>'web.recruiter.index','uses'=>'Web\RecruiterController@index']);
/*Recruiter*/

/*Freelancer*/
Route::match(['get','post'],'/freelancer',['as'=>'web.freelancer.index','uses'=>'Web\FreelancerController@index']);
/*Freelancer*/


