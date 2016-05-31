<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Contracts\Validation;
use App\Registered_user;
use DB;
class SignupController extends Controller
{
    //
    	public function showAll()
    	{
    		//
    	//	$registered_user = App\Registered_user::all();
          //return 'hi';
         //	return view('auth/register',compact('registered_user'));

    		return view('auth/register');
    	}

    	/**
    	 * Show the form for creating a new resource.
    	 *
    	 * @return Response
    	 */


    	public function createMethod(Request $request)
    	{
    		//return 'asd'
    		//$registered_user = new App\Registered_user;

    		$this->validate($request,[
    			'name' => 'required',
    			'ContactNumber' => 'required',
    			'gender' => 'required',
    			'email' => 'required',
    			'password' => 'required',
    			'password_confirmation' => 'required|same:password',
    		

    		]);
    		$email = $request->input('email');
    		//$registered_user = Registered_user::where('Email', '=', $request->get('email'))->first();
    		$user = DB::table('registered_user')->where('email', $email)->first();
    		if ($user != null) {
    		   // user doesn't exist
    			return "hi";
    		}
    	//	$rules = array(
            //'name'             => 'required'                        // just a normal required validation
            //'email'            => 'required|email|unique:ducks',     // required and must be unique in the ducks table
            //'password'         => 'required',
            //'password_confirmation' => 'required|same:password'           // required and has to match the password field
        //	);

        	//$validator = Validator::make($request->all(), $this->$rules);
        	// if ($validator->fails()) {
        	 //	$messages = $validator->messages();
        	 	//return back()->withErrors($validator);
        	// }
        	// else{
        	$registered_user = new App\Registered_user;
    		$registered_user->Name= $request->get('name');
            $registered_user->Contact_number= $request->get('ContactNumber');
            $registered_user->Address=$request->get('Address');
            $registered_user->DOB=$request->get('DOB');
            $registered_user->Gender= $request->get('gender');
            $registered_user->Email=$request->get('email');
            $registered_user->password=bcrypt($request->get('password'));
            $registered_user->save();
            return back();
        	//}
    	}

    	/**
    	 * Store a newly created resource in storage.
    	 *
    	 * @return Response
    	 */
    	public function store()
    	{
    		//
    	}

    	/**
    	 * Display the specified resource.
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function show($id)
    	{
    		//
    	}

    	/**
    	 * Show the form for editing the specified resource.
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function edit($id)
    	{
    		//
    	}

    	/**
    	 * Update the specified resource in storage.
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function update($id)
    	{
    		//
    	}

    	/**
    	 * Remove the specified resource from storage.
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function destroy($id)
    	{
    		//
    	}

}
