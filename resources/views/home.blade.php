<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">

</head>
<body>
	
<div class="container text-center col-md-12 home-container">

	<div class="row wrapper">

	<div class="login col-md-5">
		<h2>Log In</h2>
		<form action="login.php" method="post">
			<div class="form-group">
				<input type="hidden" name="action" value="register">
				<input type="text" name="email" placeholder="email">
				<input type="text" name="password" placeholder="password">
			</div>
		<button class="btn btn-success" type="submit" name="login">Log In</button>
		</form>	
	</div>
	<div class="col-md-2">
		<h2>Or</h2>
	</div>
	<div class="register col-md-5">
		<h2>Register</h2>
		<form action="register.php" method="post">
			<div class="form-group">
				<input type="hidden" name="action" value="register">
				<input type="text" name="first_name" placeholder="first name">
				<input type="text" name="last_name" placeholder="last name">
				<input type="text" name="email" placeholder="email">
				<input type="password" name="password" placeholder="password">
				<input type="password" name="confirmed_password" placeholder="confirm password">
			</div>
		<button class="btn btn-primary" type="submit" name="register">Register</button>
		</form>
	</div>
</div>
</div>

</body>
</html>