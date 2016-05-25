<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Registered_user;
use DB;
use Illuminate\Contracts\Validation;
class loginController extends adminController{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
		 */

	
	public function logged(){
		

		if(!Auth::check()){
			return redirect('/admin');
		}
		//if(!Auth::guest()) return
		// return redirect("/admin");
		//return "hi";
	}
	public function adminCheck(Request $request){

		//$this->validate($request,[
		//		'email' => 'required',
		//		'password' => 'required'
		//		]);
		if(!Auth::attempt(['email' => 'admin@admin.com' ,'password' => $request['password']])){
				return redirect()->back()->with(['fail' => 'dont use admins email ']);
		}
		return redirect('/admin');

	}


	public function postLogin(Request $request){
		//$task->title = $request->input('task');
			//if($request->email=='admin@admin.com'){
			//	return $this->adminCheck($request);
			//}
			//$this->validate($request,[
				//'email' => 'required',
			//	'password' => 'required'
			//	]);
			//if(Auth::attempt(['email' => 'admin@admin.com' ,'password' => $request['password']])){
			//	 			return redirect('/Logadmin');
			//}
			


			$this->validate($request,[
				'email' => 'required',
				'password' => 'required'
				]);
			if(!Auth::attempt(['email' => $request['email'],'password' => $request['password']])){
				return redirect()->back()->with(['fail' => 'Could not log you in !']);
				
			}
			
			if($request->email!='admin@admin.com'){
				$email = $request->input('email');
				$registered_user = new Registered_user;
				$user = DB::table('registered_user')->where('email', $email)->first();
				return view('logged',compact('user'));
			}
			//return redirect()->back()->with(['fail' => 'Could not log you in !']);
			return $this->index($request);
			//return redirect()->action('adminController@index');//, ['password' => $request->password]);
		//return redirect('/admin')->with(['admin' => $request);
			//$rules = [
			  //  'email' => 'in:admin'
			//];
			//if (! Auth::use()->email === 'admin'
			  //  {
			    //    echo "hi";
			   // }
				//$validator = Validator::make($request, $this->$rules);
			//if(!Auth::attempt(['email' => $request['email'],'password' => $request['password']])){
			 //if ($validator->fails()) {

			 	// return "hi";
			 	//}			 

				
			//	}
			//Auth::attempt(array('Email' => Input::get('email'), 'password' => Input::get('password')), true);

  //  Redirect::to('users/' . Auth::user()->id);
			//$email = Auth::user()->email;
			
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
			
			//$results = DB::table('registered_user')->get();
			//$results = DB::select( DB::raw(SELECT Name FROM `registered_user` where Email = '123@c'));
			//$name = DB::table('users')->where('email', '123@c')->value('name');
			

			//echo $user->Name;
			


	}


	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function logout()
	{
		//
		Auth::logout();
	
		return redirect()->action('mainPageController@show');
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
