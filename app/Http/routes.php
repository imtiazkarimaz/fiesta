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
use Illuminate\Support\Facades\Input;
use App\Http\Controllers;





  
    Route::get('/','mainPageController@show')->middleware(['web']);
    Route::get('/reg', 'SignupController@showAll')->middleware(['web']);




   Route::post('/reg/store','SignupController@createMethod')->middleware(['web']);


  Route::post('/login','loginController@postLogin')->middleware(['web']);

  Route::get('/admin/{User_id}','adminController@show')->middleware(['web']);
  Route::get('/admin/events/{Event_id}','adminController@edit')->middleware(['web']);

  Route::get('/admin/events/feature/{Event_id}','adminController@feature')->middleware(['web']);
   Route::get('/admin/events/unfeature/{Event_id}','adminController@unfeature')->middleware(['web']);
   //Route::get('/logged','loginController@logged' );

  // Route::get('/Logadmin','loginController@logged');
  Route::get('/admin','adminController@login');
  Route::post('/admin/login','adminController@postLogin');
   //Route::get('/admin/users','adminController@view');




    //
    







