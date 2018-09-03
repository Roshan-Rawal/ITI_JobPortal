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



Route::get('/',function(){
	return view('new_welcome');
});

Route::get('/fieldtest','Controller@fieldtest');
Route::get('/buildresume','Controller@buildresume');

Route::get('/profile','Controller@profile');
Route::get('/comp_profile','Controller@comp_profile');
Route::get('/posts','Controller@posts');

Route::get('/iti_list',function(){
	return view('iti_list');
});

Route::get('/help',function(){
	return view('help');
});
Route::get('/company',function(){
	return view('company');
});
Route::get('/jobseeker',function(){
	return view('jobseeker');
});
Route::get('/jobgiver',function(){
	return view('jobgiver');
});
Route::get('/test',function(){
	return view('test');
});
Route::post('/test2',function(){
	return view('test2');
});
Route::post('/rank',function(){
	return view('rank');
});
Route::post('/jobseeker_aadhar',function(){
	return view('jobseeker_aadhar');
});

Route::get('/job_application',function(){
	return view('job_application');
});
Route::get('/company_details',function(){
	return view('company_details');
});

Route::get('/job_city',function(){
	return view('job_city');
});

Route::get('/job_stream',function(){
	return view('job_stream');
});

Route::get('/recuirment_list',function(){
	return view('recuirment_list');
});
Route::get('/recruiter_list',function(){
	return view('recruiter_list');
});
Route::get('/applied',function(){
	return view('applied');
});

Route::get('/resume',function(){
	return view('resume');
});

Route::get('/job_post',function(){
	return view('job_post');
});


Route::get('/logout','Controller@logout');
Route::get('/clogout','Controller@clogout');

Route::get('/new_welcome','Controller@new_welcome');

Route::get('send','mailController@send');

Route::get('/application',function(){
	return view('application');
});

//Route::get('/trends',function(){
	//return view('trends');
//});
Route::get('/status',function(){
	return view('status');
});

Route::get('/trends','Controller@trends');

//Route::post('/jobseeker/aadharfetch','Controller@aadhar');
Route::post('/job_post/post','Controller@job_post');
Route::post('/aadhar','Controller@aadhar');
Route::post('/jobseeker/register','Controller@register');
Route::post('/jobseeker_aadhar/aadhar_register','Controller@aadhar_register');


Route::post('/jobgiver/company_register','Controller@company_register');

Route::post('/header/login','Controller@login');

Route::post('/trends_filter','Controller@filter');
