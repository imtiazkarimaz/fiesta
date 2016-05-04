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

Route::get('/','mainPageController@show');
// Route::get('/','eventController@create');


/* Route::get('/', function()
  {
      return view('mainPage/mainPageView');
  });
  */
    
   Route::get('/reg', function()
  {
      return view('auth/register');
  });

   Route::post('/reg/store',function(){
    
       $registered_user = new App\Registered_user;
       $registered_user->Name= Input::get('name');
        $registered_user->Contact_number= Input::get('ContactNumber');
        $registered_user->Address=Input::get('Address');
        $registered_user->DOB=Input::get('DOB');
        $registered_user->Gender= Input::get('gender');
        $registered_user->Email=Input::get('email');
        $registered_user->password=Input::get('password');
        $registered_user->save();
        //return view ('auth/register')

    
   });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
