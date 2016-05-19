@extends('app')

@section('content')


	<h1>before</h1>
		
 
	
		
		<h1>show all events of <h1>


		@foreach ($event as $events)
		<ul class = "list-group">
			<div class="form-group">
			
				<div class="col-md-6">
					<a href="events/{{$events->Event_id}}">{{ $events->Ename}}</a>
				</div>
			</div>
		</ul>

			

		@endforeach


	



	



@stop