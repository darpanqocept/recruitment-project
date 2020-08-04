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
Route::match(['get','post'],'/jobseeker/profile',['as'=>'web.job.profilePage','uses'=>'Web\JobseekerController@profilePage']);
Route::match(['get','post'],'/jobseeker/profile/view',['as'=>'web.job.profileView','uses'=>'Web\JobseekerController@profileView']);
Route::match(['get','post'],'/jobseeker/myjob',['as'=>'web.job.myJob','uses'=>'Web\JobseekerController@myJob']);
Route::match(['get','post'],'/jobseeker/search',['as'=>'web.job.searchJob','uses'=>'Web\JobseekerController@searchJob']);


Route::match(['get','post'],'/jobseeker/post',['as'=>'web.job.postFeed','uses'=>'Web\JobseekerController@postFeed']);
/*job seeker*/

/*Recruiter*/
Route::match(['get','post'],'/recruiter',['as'=>'web.recruiter.index','uses'=>'Web\RecruiterController@index']);
/*Recruiter*/

/*Freelancer*/
Route::match(['get','post'],'/freelancer',['as'=>'web.freelancer.index','uses'=>'Web\FreelancerController@index']);
Route::match(['get','post'],'/freelancer/network',['as'=>'web.freelancer.networkPage','uses'=>'Web\FreelancerController@networkPage']);
Route::match(['get','post'],'/freelancer/profile',['as'=>'web.freelancer.profilePage','uses'=>'Web\FreelancerController@profilePage']);
Route::match(['get','post'],'/freelancer/profile/view',['as'=>'web.freelancer.profileView','uses'=>'Web\FreelancerController@profileView']);
Route::match(['get','post'],'/freelancer/myjob',['as'=>'web.freelancer.myJob','uses'=>'Web\FreelancerController@myJob']);
Route::match(['get','post'],'/freelancer/candidate',['as'=>'web.freelancer.allCandidates','uses'=>'Web\FreelancerController@allCandidates']);
Route::match(['get','post'],'/freelancer/project',['as'=>'web.freelancer.myProjects','uses'=>'Web\FreelancerController@myProjects']);
/*Freelancer*/


