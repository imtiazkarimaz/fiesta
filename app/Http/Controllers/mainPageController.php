<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Registered_user;
use App\Event;

class mainPageController extends Controller {

    
    public function show()
    {
        
    	$event = DB::table('event')->where('Featured', '=', '1')->get();



    	//return $event;
        return view('mainPage/mainPageView',compact('event'));
    }           
}
