<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Registered_user;
use DB;
class loginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
		 */

	
	public function logged(){
		
		//return "hi";
	}

	public function postLogin(Request $request){
		//$task->title = $request->input('task');

			$this->validate($request,[
				'email' => 'required',
				'password' => 'required'
				]);
			if(!Auth::attempt(['email' => $request['email'],'password' => $request['password']])){
				return redirect()->back()->with(['fail' => 'Could not log you in !']);
			}
			//Auth::attempt(array('Email' => Input::get('email'), 'password' => Input::get('password')), true);

  //  Redirect::to('users/' . Auth::user()->id);
			//$email = Auth::user()->email;
			$email = $request->input('email');
			//$name = $request->input('name');
			//echo $email;
			//$registered_user = new App\Registered_user;
			//$name = $App\Registered_user::find('email');
			//$name = DB::table('registered_user')->where('email', $email)->first();
			//Registered_user::where('email','email') -> first();
			//$email = $request::Input('email');
			//return $email; 
			//return $email;
			//$return $request;
			//$registered_user = App\Registered_user::find('email');
			//return $registered_user;
		//return view('logged',compact('name'));
			//return redirect()->route('/logged');
		//return "hi";
			$registered_user = new Registered_user;
			//$results = DB::table('registered_user')->get();
			//$results = DB::select( DB::raw(SELECT Name FROM `registered_user` where Email = '123@c'));
			//$name = DB::table('users')->where('email', '123@c')->value('name');
			$user = DB::table('registered_user')->where('email', $email)->first();

			//echo $user->Name;
			return view('logged',compact('user'));


	}


	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
