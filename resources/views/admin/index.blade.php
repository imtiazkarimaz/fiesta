@extends('app')

@section('content')


	
		
 
	
		<h1>show all registered users</h1>
		
			@foreach ($registered_user as $registered)
			<ul class = "list-group">
				<div class="form-group">
				

					<li class= "list-group-item"><a href="/fiesta/public/admin/{{$registered->User_id}}">{{ $registered->Name}}</a></li>	
				</div>
			
			</ul>
		


		@endforeach



	



@stop