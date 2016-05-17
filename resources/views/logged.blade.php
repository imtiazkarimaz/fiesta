@extends('app')
@section('content')

<p align="justify">

@if(Auth::check())
	
		{{ $user->Name}}
 @endif
</p>
@stop