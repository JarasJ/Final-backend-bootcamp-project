@extends('master')
@section('content')



<div class="main-container">

  <header>
    <h4><strong>Sveiki username!</strong></h4>
    <span style="float: right;"><a href="/logout">Atsijungti <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></span>
  </header>

  <div class="body">


	 <div class="navigation">

   <form action="">

      <div class="team">

        <h4 class="booking-title">Pasirinkite meistrą</h4>

        <select>
          <option value="">...</option>
          <option value="redas">Redas</option>
          <option value="zygmas">Zygmas</option>
          <option value="birute">Birutė</option>
          <option value="pranas">Pranas</option>
        </select>

    </div>

    <div class="services">

      <h4 class="booking-title">Pasirinkite procedūras</h4>

      <div class="service-checkbox">
        <div class="service-checkbox-title">
          <h5>Kirpimas</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>

        <div class="service-checkbox-title">
          <h5>Plaukų dažymas</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>

        <div class="service-checkbox-title">
          <h5>Proginė šukuosena</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>

        <div class="service-checkbox-title">
          <h5>Barzdos kirpimas</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>

        <div class="service-checkbox-title">
          <h5>Manikiūras</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>

        <div class="service-checkbox-title">
          <h5>Pedikiūras</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>

        <div class="service-checkbox-title">
          <h5>Makiažas</h5>
        </div>
        <div class="checkbox-inline">
          <input  type="checkbox" name="" value="">
        </div>
      </div>

    </div> <!--end services-->

    <div class="date-picker">
      <h4 class="booking-title">Pasirinkite datą</h4>
      <input type="text" id="datepicker">

      <select>
        <option value="">10:00</option>
        <option value="">11:00</option>
        <option value="">12:00</option>
        <option value="">13:00</option>
        <option value="">14:00</option>
        <option value="">15:00</option>
        <option value="">16:00</option>
        <option value="">17:00</option>
        <option value="">18:00</option>
        <option value="">19:00</option>
      </select>

    </div>

    <div class="submit-btn">

      <input class="btn btn-success" type="submit" name="Registruotis">

    </div>

    </form>
    
  </div> <!-- end of .navigation -->

  <div class="main">

    <div class="upcoming-bookings bookings">
    <h4>Ateinantis užsakymai</h4>

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
    <h4>Buvę užsakymai</h4>

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

  </div>

  <footer class="footer">
    <p class="text-center">All rights reserved &copy 2017</p>
  </footer>
</div>

<!-- <a href="/admin/validate"><p>Admin</p></a> -->


  <script>

  $(document).ready(function () {

  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  });

  </script>







@endsection
