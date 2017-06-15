@extends('master')
@section('content')

<div class="container text-center col-md-12 main-body">
		<h1>Hello username!</h1>

	<div class="container">

<!-- kzk turetu buti sitas -->
<a href="/logout">Log out</a>

		<form class="form-group row">
  			<label class="mr-sm-2" for="inlineFormCustomSelect">Barbers</label>
  			<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    			<option selected>Choose...</option>
    			<option value="1">One</option>
    			<option value="2">Two</option>
    			<option value="3">Three</option>
  			</select>
  		</form>






	</div><!--end of .container-->




</div><!--end of .container-->

	<footer class="footer">
		<p class="text-center">All rights reserved &copy 2017</p>
	</footer>





@endsection
