<?php namespace App\Http\Controllers;

class eventController extends Controller {

    
    public function create()
    {
        return view('event/createEventView');
    }           
}
