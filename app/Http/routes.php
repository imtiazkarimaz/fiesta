<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


 

    // your routes
Route::group(['middleware' => ['web']], function () {
    Route::post('/login','loginController@postLogin');
    Route::get('/event', 'eventController@create');
  
 	Route::post('upload','eventController@setCoverPath');
 	Route::post('schedule','eventController@setSchedule');
 	 Route::get('/','mainPageController@show');
 	 Route::get('/reg', 'SignupController@showAll');

 	 Route::get('/search/req/{str}', 'searchController@searchinfo');

 	 Route::get('/req/show/{id}', 'searchController@showinfo');
 	 Route::post('/reg/store','SignupController@createMethod');

 	Route::get('/search', 'searchController@showinit');
 	 
 	 Route::get('/home/{user_id}','loginController@home');
 	 Route::get('/home/events/{user}','loginController@showEvents');

 	 Route::get('/admin/{User_id}','adminController@show');
 	 Route::get('/admin/events/{Event_id}','adminController@edit');

 	 Route::get('/admin/events/feature/{Event_id}','adminController@feature');
 	 Route::get('/admin/events/unfeature/{Event_id}','adminController@unfeature');
 	 Route::get('/admin/events/delete/{Event_id}','adminController@destroy');
 	
 	 Route::get('/admin','adminController@login');
 	 Route::post('/admin/login','adminController@postLogin');
 	
 	 Route::get('/logout','loginController@logout');
 	
 
});