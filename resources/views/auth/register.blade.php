@extends('app')
@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Database:</h1>
				
				<div class="col-md-8 col-md-offset-2">
					<ul class = "list-group">
								@foreach ($registered_user as $Registered_user)
																
										<li class = "list-group-item">{{ $Registered_user->Name}}</li>	

								<br>
									
								@endforeach

					</ul>
				</div>
					

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/').'/reg/store'}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Contact Number</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="ContactNumber">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="Address">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">DOB</label>
							<div class="col-md-6">
								<input type="date" class="form-control" name="DOB" min="1980-01-02" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Gender</label>
							<div class="col-md-6">
								<input type="radio" name="gender" value="male"> Male<br>
  								<input type="radio" name="gender" value="female"> Female<br>
								<input type="radio" name="gender" value="other"> Other
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" value ="add">
									Register
								</button>
							</div>
						</div>
					</form>
			</div>
		</div>
@stop
