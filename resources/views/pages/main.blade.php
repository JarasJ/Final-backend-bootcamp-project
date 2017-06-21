@extends('master')
@section('content')



<div class="main-container">

@include('pages.header')

  <div class="body">


	 <div class="navigation">

   <form class="main-form" action="/addbooking" method="post">
		 {{csrf_field()}}
      <div class="team">

        <h4 class="booking-title">Pasirinkite meistrą</h4>

        <br>

        <div>

        <select name="master">
					@foreach ($masters as $master)
          <option name="master" value="{{$master->firstname}}">{{$master->firstname}}</option>
					@endforeach
        </select>

        </div>

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
      <h4 class="booking-title">Pasirinkite datą ir laiką</h4>

      <input type="text" id="datepicker" name="date">


      <select name="date1">
				@for ($i=10;$i<=19;$i++)
        <option value="{{$i}}:00">{{$i}}:00</option>
				@endfor
      </select>


    </div>

    <div class="submit-btn">

      <input class="btn btn-success" type="submit" VALUE='Registruotis' name="Registruotis">

    </div>

    </form>

  </div> <!-- end of .navigation -->



<!-- nervuoja ta table tvarkyt, tai jei nk pries, per include padariau ji -->
  @include('pages.table')

  </div> <!--end of .body -->

   @include('pages.footer')

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
<!-- <a href="/admin"><p>Admin</p></a> -->

  <script>

  $(document).ready(function () {

    $( "#datepicker" ).datepicker({dateFormat: 'yy.mm.dd', firstDay: 1}).datepicker("setDate", new Date());

  });

  </script>


@endsection
