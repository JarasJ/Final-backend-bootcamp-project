@extends('master')
@section('content')

<div class="container text-center col-md-12 main-container">


	<div class="custom-nav">

    <div class="nav-header">
      <h4><strong>Hello username!</strong></h4>
      <span><a href="/logout">Log out</a></span>
    </div>


<!-- kzk turetu buti sitas -->

<div class="team">

  <h5 class="booking-title">Pasirinkite meistrą</h5>

  <select>
    <option value="redas">Redas</option>
    <option value="zygmas">Zygmas</option>
    <option value="birutė">Birutė</option>
    <option value="pranas">Pranas</option>
  </select>



</div>

<div class="services">
  <a href="/admin/validate"><h5 class="booking-title">Pasirinkite procedūras</h5></a>

  <form>
		{{csrf_field()}}
		@foreach ($services as $service)

    <label class="checkbox-inline">
      {{$service->service}}<input type="checkbox" value=''>
			<input type="hidden" name="{{$service->id}}">
		@endforeach
=======
      Kirpimas<input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Plaukų dažymas<input type="checkbox" value="">
    </label>
    <label class="checkbox-inline">
      Šventinis Šukavimas <input type="checkbox" value="">
    </label>
  <!-- <label class="checkbox-inline"> -->
      <!-- Barzdos kirpimas<input type="checkbox" value=""> -->
    <!-- </label> -->
    <!-- <label class="checkbox-inline"> -->
      <!-- Manikiūras<input type="checkbox" value=""> -->
    <!-- </label> -->
    <!-- <label class="checkbox-inline"> -->
      <!-- Barzdos kirpimas<input type="checkbox" value=""> -->
    <!-- </label> -->
>>>>>>> f05688a5fa34fc9a4acbc0743189886cd32df61f
  </form>

</div> <!--end services-->



<div class="date-picker">
  <h5 class="booking-title">Book Date</h5>
  <input type="text" id="datepicker">

</div>




</div> <!-- end of .nav -->







<div class="row main">

  <div class="upcoming-bookings bookings">
    <h5>Ateinantis užsakymai</h5>
    <table class = "table table-striped">


   <thead>
      <tr>
         <th>Data ir laikas</th>
         <th>Meistras</th>
         <th>Procedūros</th>
         <th>Kaina</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>2017.06.29 19:00</td>
         <td>Redas</td>
         <td>Plaukų kirpimas; Barzdos kirpimas</td>
         <td>30 &euro;</td>
      </tr>

      <tr>
         <td>2017.07.05 19:00</td>
         <td>Redas</td>
         <td>Plaukų kirpimas; Barzdos kirpimas</td>
         <td>30 &euro;</td>
      </tr>

      <tr>
         <td>2017.07.29 18:15</td>
         <td>Redas</td>
         <td>Plaukų kirpimas; Barzdos kirpimas</td>
         <td>30 &euro;</td>
      </tr>
   </tbody>

</table>
  </div>

  <div class="previous-bookings bookings">
    <h5>Buvę užsakymai</h5>

        <table class = "table table-striped">

   <thead>
      <tr>
         <th>Data ir laikas</th>
         <th>Meistras</th>
         <th>Procedūros</th>
         <th>Kaina</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>2017.05.29 19:00</td>
         <td>Redas</td>
         <td>Plaukų kirpimas; Barzdos kirpimas</td>
         <td>30 &euro;</td>
      </tr>

      <tr>
         <td>2017.04.05 19:00</td>
         <td>Redas</td>
         <td>Plaukų kirpimas; Barzdos kirpimas</td>
         <td>30 &euro;</td>
      </tr>

      <tr>
         <td>2017.03.29 18:15</td>
         <td>Redas</td>
         <td>Plaukų kirpimas; Barzdos kirpimas</td>
         <td>30 &euro;</td>
      </tr>
   </tbody>

</table>
  </div>


</div><!--end main-->


<a href="/admin/validate"><p>Admin</p></a>


  </div><!--end of .container-->


  <footer class="footer">
    <p class="text-center">All rights reserved &copy 2017</p>
  </footer>

  <script>

  $(document).ready(function () {

  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  });

  </script>







@endsection
