@extends('master')
@section('content')



<div class="main-container">

  <header>
    <h4><strong>Sveiki {{$user->firstname}}!</strong></h4>
    <span style="float: right;"><a href="/logout">Atsijungti <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></span>
  </header>

  <div class="body">


	 <div class="navigation">

   <form action="/addbooking" method="post">
		 {{csrf_field()}}
      <div class="team">

        <h4 class="booking-title">Pasirinkite meistrą</h4>

        <select name="master">
					@foreach ($masters as $master)
          <option name="master" value="{{$master->firstname}}">{{$master->firstname}}</option>
					@endforeach
        </select>

    </div>

    <div class="services">

      <h4 class="booking-title">Pasirinkite procedūras</h4>

      <div class="service-checkbox">
				@foreach ($services as $service)
        <div class="service-checkbox-title">
          <h5>{{$service->service}}</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="procedure[]" value="{{$service->service}}">
        </div>
				@endforeach
      </div>

    </div> <!--end services-->

    <div class="date-picker">
      <h4 class="booking-title">Pasirinkite datą</h4>
      <input type="text" id="datepicker" name="date">

      <select name="date1">
				@for ($i=10;$i<=19;$i++)
        <option value="{{$i}}:00">{{$i}}:00</option>
				@endfor
      </select>

    </div>

    <div class="submit-btn">

      <input class="btn btn-success" type="submit" VALUE='adasd' name="Registruotis">

    </div>

    </form>

  </div> <!-- end of .navigation -->

<!-- nervuoja ta table tvarkyt, tai jei nk pries, per include padariau ji -->
  @include('pages.table');

  </div>

  <footer class="footer">
    <p class="text-center">All rights reserved &copy 2017</p>
  </footer>
</div>
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
 @endif
<a href="/admin"><p>Admin</p></a>

  <script>

  $(document).ready(function () {

  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  });

  </script>







@endsection
