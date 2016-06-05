<html>


	

<body>

	
	<label>name:</label>	{{ $user->Name}}
	<br>
	<label>contact number:</label>	{{ $user->Contact_number}}
	<br>
	<label>address:</label>	{{ $user->Address}}
	<br>
	<label>DOB:</label>	{{ $user->DOB}}
	<br>
	<label>gender:</label>	{{ $user->Gender}}
	<br>
	<label>email:</label>	{{ $user->Email}}
	<br>
	<a href="events/{{$user->User_id}}"> <button type="signUp" name="submit" class="btn btn-success"> show events </button> </a>
	<a href="{{ url('/').'/logout'}}"> <button type="signUp" name="submit" class="btn btn-success"> Logout </button> </a>
	<br>
	


</p>

</body>
</html> 