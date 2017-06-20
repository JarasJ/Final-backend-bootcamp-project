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

<form action='/addmasters' method='post'>
  {{csrf_field()}}
  Masters Firtstname: <input type='text' name='firstname' required> <br/>
  Masters Lastname: <input type='text' name='lastname' required>
  <input type='submit' name='submit' value="Add master">
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



<!-- nervuoja ta table tvarkyt, tai jei nk pries, per include padariau ji -->
  @include('pages.table')

  </div> <!--end of .body -->

   @include('pages.footer')

</div>



<a href="/main">Main page</a>



@include('pages.footer')

@endsection
