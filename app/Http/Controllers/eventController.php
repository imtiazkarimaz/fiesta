<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class eventController extends Controller
{
    //
    public function create()
    {
        return view('event/createEventView');
    }      
}
