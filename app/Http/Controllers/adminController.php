<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Registered_user;
use App\Event;

class adminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function view(Request $request){
		//return "hi";
		//return redirect('/admin');//->with('request' => '$request');
		
		$registered_user = Registered_user::all();
		return view('admin.index',compact('registered_user'));
	

	}
	public function login(Request $request){
		//return "hi";
		//return redirect('/admin');//->with('request' => '$request');
		return view('admin.admin');


	}
		
	public function postLogin(Request $request){	
	$this->validate($request,[
				'email' => 'required',
				'password' => 'required'
				]);
	if(!Auth::attempt(['email' => 'admin@admin.com','password' => $request['password']])){
			return redirect()->back()->with(['fail' => 'Could not log you in warning!']);
				
	}
			//return redirect('/admin/users');
		
		$registered_user = Registered_user::all();
		return view('admin.index',compact('registered_user'));

	}
	public function index(Request $request)
	{
		//

		//if (Auth::check()) {
		    // The user is logged in...
			//if('admin'=='karim'){
			///	echo 'hi';
			//}

		if(!Auth::attempt(['email' => 'admin@admin.com' ,'password' => $request['password']])){
				return redirect()->back()->with(['fail' => 'dont use admins email ']);
		}

		$password = '1';
		return redirect('admin');
		//return $password;
		//return "hi";
		//return redirect('/admin');
		//$registered_user = Registered_user::all();
		//return view('admin.index',compact('registered_user'));
	

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
	public function show($User_id)
	{
		//
		//$registered_user = DB::table('registered_user')->where('User_id', $User_id)->first();

		//$registered_user = Registered_user::find($User_id);
 		//return view('admin.show', compact('registered_user'));
 		//$users = DB::table('users')
          //  ->join('contacts', 'users.id', '=', 'contacts.user_id')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            //->select('users.*', 'contacts.phone', 'orders.price')
            //->get();

		$event=DB::table('event')
		->join('event_host', 'event.Event_id', '=', 'event_host.Event_id')
        ->join('registered_user', function ($join) use ($User_id) {
            $join->on('registered_user.User_id', '=', 'event_host.User_id')
                 ->where('event_host.User_id', '=', $User_id);
        })
        ->get();
        return view('admin.show', compact('event'));
		

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
		return $id;
	}
	public function feature($id)
	{
		//

		//App\Event::where('Event_id', '$id')
          //->update(['Featured' => 1]);


		$event = Event::where('Event_id',$id)->first();
		//return $event;
		$event->Featured =1;
		$event->update();
          return back();
		//return $id;
	}

	public function unfeature($id)
	{
		//

		//App\Event::where('Event_id', '$id')
          //->update(['Featured' => 1]);


		$event = Event::where('Event_id',$id)->first();
		//return $event;
		$event->Featured =0;
		$event->update();
          return back();
		//return $id;
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
		return $id;
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
