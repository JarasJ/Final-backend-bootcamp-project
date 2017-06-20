@extends('master')
@section('content')


<div class="main-container">

@include('pages.header')

  <div class="body">


	 <div class="navigation">

   <form class="main-form" action="/addbooking" method="post">
		 {{csrf_field()}}
      <div class="team">

        <h4 class="booking-title">Pridėkite darbuotoją</h4>

        <br>

        <div>

<form action='/addmasters' method='post'>
  {{csrf_field()}}
  <h5>Darbuotojo vardas: <h5><input type='text' name='firstname' required>
  <h5>Darbuotojo pavardė: <h5><input type='text' name='lastname' required>
  <input class="btn btn-succes" type='submit' name='submit' value="Add master">
</form>

        </div>

    </div>

<div class="services">

      <h4 class="booking-title">Pasirinkite procedūras</h4>

      <form action="/addservice" method="post">
  {{csrf_field()}}
  Service: <input type="text" name="service" required> <br/>
  Price: <input type="text" name="price" required>
  <input type="submit" name="add" value="add">
</form>



    </div> <!--end services-->





<br/>
<br/>

 </div> <!-- end of .navigation -->

 <div class="main">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h5>Busimi užsakymai</h5></a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h5>Buvę užsakymai</h5></a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><h5>Klientai<h5></a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><h5>Darbuotojai<h5></a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    	<table class = "table table-striped">
              
              <thead>
                 <tr>
                    <th>Data ir laikas</th>
                    <th>Klientas</th>
                    <th>Meistras</th>
                    <th>Procedūros</th>
                    <th>Kaina</th>
                 </tr>
              </thead>
          @foreach ($bookings as $booking)
            @if ($booking ->time < $today)
               <tbody>
                  <tr>
                    <td>{{$booking ->time}}</td>
                    <td>-</td>
                    <td>{{$booking ->specialist}}</td>
                    <td>{{$booking ->procedure}}</td>
                    <td>30 &euro;</td>
                  </tr>
               </tbody>
            @endif
          @endforeach
        </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    	<table class = "table table-striped">
              <thead>
                 <tr>
                    <th>Data ir laikas</th>
                    <th>Klientas</th>
                    <th>Meistras</th>
                    <th>Procedūros</th>
                    <th>Kaina</th>
                 </tr>
              </thead>
          @foreach ($bookings as $booking)
            @if ($booking ->time < $today)
               <tbody>
                  <tr>
                    <td>{{$booking ->time}}</td>
                    <td>-</td>
                    <td>{{$booking ->specialist}}</td>
                    <td>{{$booking ->procedure}}</td>
                    <td>30 &euro;</td>
                  </tr>
               </tbody>
            @endif
          @endforeach
        </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>



<!-- nervuoja ta table tvarkyt, tai jei nk pries, per include padariau ji -->


  </div> <!--end of .body -->

   @include('pages.footer')

</div>



<a href="/main">Main page</a>


@endsection
