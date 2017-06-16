@extends('master')
@section('content')

<div class="container text-center col-md-12 main-container">
		

	<div class="nav">

    <div class="nav-header">
      <h4><strong>Hello username!</strong></h4> 
      <span><a href="/logout">Log out</a></span>
    </div>


<!-- kzk turetu buti sitas -->

<div class="team">

  <h5 class="booking-title">Choose</h5>

  
  
</div>

<div class="services">
  <h5 class="booking-title">Choose Services</h5>

  <form>
    <label class="checkbox-inline">
      Kirpimas<input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Plaukų dažymas<input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Šventinis Šukavimas <input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Barzdos kirpimas<input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Manikiūras<input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Barzdos kirpimas<input type="checkbox" value="">
    </label>
  </form>

  

<div class="date-picker">
  <h5 class="booking-title">Book Date</h5>
  <input type="text" id="datepicker">
  
</div>




</div> <!-- end of .nav -->







<div class="main">
      

</div>


</div><!--end of .container-->

  <footer class="footer">
    <p class="text-center">All rights reserved &copy 2017</p>
  </footer>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  </script>







@endsection
