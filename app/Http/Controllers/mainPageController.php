<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Registered_user;
use App\Event;
class mainPageController extends Controller
{
    //
    public function show()
    {
        
    	$event = DB::table('event')->where('Featured', '=', '1')->get();



    	//return $event;
        return view('mainPage/mainPageView',compact('event'));
    }           
}
