@extends('app')

@section('content')


	<h1>befor</h1>
		
 
	
		
		<h1>show all events of <h1>
				

		@foreach ($event as $events)
		<ul class = "list-group">
			<div class="form-group">
			
				<div class="col-md-6">
					<a href="events/{{$events->Event_id}}">{{ $events->Ename}}</a>
				</div>
				<a href="events/delete/{{$events->Event_id}}"> <button type="signUp" name="submit" class="btn btn-success"> Delete Event </button> </a>

				@if($events->Featured==1)
				
						<a href="events/unfeature/{{$events->Event_id}}"> <button type="signUp" name="submit" class="btn btn-success"> Unfeature </button> </a>

				

				@else
    				 <a href="events/feature/{{$events->Event_id}}"> <button type="signUp" name="submit" class="btn btn-success"> Feature </button> </a>
				@endif
			</div>
		</ul>


			

		@endforeach
		

		<a href="{{ url('/').'/logout'}}"> <button type="signUp" name="submit" class="btn btn-success"> Logout </button> </a>


	



	



@stop