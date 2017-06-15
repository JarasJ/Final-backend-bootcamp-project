@extends('master')
@section('content')

<div class="container text-center col-md-12 home-container">

	<div class="row wrapper">

	<div class="login col-md-5">
		<h2>Log In</h2>
		<form action="/login_in" method="post">
			<div class="form-group">
				{{csrf_field()}}
				<input type="hidden" name="action" value="register" required>
				<input type="text" name="email" placeholder="email" required>
				<input type="password" name="password" placeholder="password" required>
			</div>
			<!-- button neveikia su query uzklausom laravelyje -->
			<input type="submit" name="register" value="Register">
		</form>
	</div>
	<div class="col-md-2">
		<h2>Or</h2>

	</div>


	<div class="register col-md-5">
		<h2>Register</h2>
		<form action="/register" method="post">
			<div class="form-group">
				{{csrf_field()}}
				<!-- <input type="hidden" name="action" value="register"> -->
				<input type="text" name="firstname" placeholder="first name" required>
				<input type="text" name="lastname" placeholder="last name" required>
				<input type="text" name="email" placeholder="email" required>
				<input type="password" name="password" placeholder="password" required>
				<input type="password" name="confirmed_password" placeholder="confirm password">
			</div>
			<!-- button neveikia su query uzklausom laravelyje -->
		<input type="submit" name="register" value="Register">
		</form>

		<!-- meta error jei validatione yra klaida -->
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		 @endif

	</div>
</div>
</div>

@endsection
