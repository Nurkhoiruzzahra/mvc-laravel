<!DOCTYPE html>
<html>
<head>
	<title>Form Sign Up</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form method="Post" action="{{url('/welcome')}}" >
    @csrf
	<label>First Name</label><br>
	<input type="text" name="name" required=""><p></p>

	<label>Last Name</label><br>
	<input type="text" name="lname"><p></p>

	<label>Gender</label><br>
	<input type="radio" name="gender">Male<br>
	<input type="radio" name="gender">Female<p>

	<label>Nationality</label><br>
	<select>
		<option>Indonesia</option>
		<option>Saudi Arabian</option>
		<option>Jerman</option>
	</select><p></p>

	<label>Language Spoken</label><br>
	<input type="checkbox" name="language">Bahasa Indonesia<br>
	<input type="checkbox" name="language">English<br>
	<input type="checkbox" name="language">Other<p>


	<label>Bio</label><br>
	<textarea rows="3" cols="30"></textarea><p></p>

	<input type="submit" name="Sign" value="sign Up">
</form>
</body>
</html>