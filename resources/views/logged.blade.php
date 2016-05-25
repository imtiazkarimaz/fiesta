@extends('app')
@section('content')

<p align="justify">


	


@if(Auth::check())
	<a href="{{ url('/').'/logout'}}"> <button type="signUp" name="submit" class="btn btn-success"> Logout </button> </a>
		{{ $user->Name}}
 @endif
</p>
@stop