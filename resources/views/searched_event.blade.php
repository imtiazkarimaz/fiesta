@extends('app')

@section('content')


	<h1>befor</h1>
		
 
	
		
		<h1>show all events of <h1>
				

		
		
			<label>Event: </label>
			<div class="form-group">
			
				<div class="col-md-6">
				<label>Event name: </label>{{ $event->Ename}}
				<br>
				<label>Event Venue: </label>{{ $event->Venue}}
				<br>
				<label>time: </label>{{ $event->year}}
				<br>
				<label>note: </label>{{ $event->Short_note}}
				<br>
				<label>fee: </label>{{ $event->Entry_fee}}
				<br>
					
				</div>
			
				
				
			</div>
		
		<br>
		<br>


			


		

	<a href="{{ url('/').'/logout'}}"> <button type="signUp" name="submit" class="btn btn-success"> Logout </button> </a>

	



	



@stop