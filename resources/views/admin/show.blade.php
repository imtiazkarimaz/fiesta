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

				@if($events->Featured==1)
					<p>   it is already featured  
						<a href="events/unfeature/{{$events->Event_id}}"> <button type="signUp" name="submit" class="btn btn-success"> Unfeature </button> </a>

					</p>

				@else
    				 <a href="events/feature/{{$events->Event_id}}"> <button type="signUp" name="submit" class="btn btn-success"> Feature </button> </a>
				@endif
			</div>
		</ul>

			

		@endforeach

		<a href="/fiesta/public"> <button type="signUp" name="submit" class="btn btn-success"> Website </button> </a>


	



	



@stop