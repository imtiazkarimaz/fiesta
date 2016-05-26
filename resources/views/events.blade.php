@extends('app')

@section('content')


	<h1>befor</h1>
		
 
	
		
		<h1>show all events of <h1>
				

		@foreach ($event as $events)
		
			<label>Event: </label>
			<div class="form-group">
			
				<div class="col-md-6">
				<label>Event name: </label>{{ $events->Ename}}
				<br>
				<label>Event Venue: </label>{{ $events->Venue}}
				<br>
				<label>time: </label>{{ $events->year}}
				<br>
				<label>note: </label>{{ $events->Short_note}}
				<br>
				<label>fee: </label>{{ $events->Entry_fee}}
				<br>
					
				</div>
			
				
				
			</div>
		
		<br>
		<br>


			

		@endforeach
		

	<a href="{{ url('/').'/logout'}}"> <button type="signUp" name="submit" class="btn btn-success"> Logout </button> </a>

	



	



@stop