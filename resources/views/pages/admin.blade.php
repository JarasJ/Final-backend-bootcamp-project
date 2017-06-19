<form action="/addservice" method="post">
  {{csrf_field()}}
  Service: <input type="text" name="service" required> <br/>
  Price: <input type="text" name="price" required>
  <input type="submit" name="add" value="add">
</form>

<br/>
<br/>

<form action='/addmasters' method='post'>
  {{csrf_field()}}
  Masters Firtstname: <input type='text' name='firstname' required> <br/>
  Masters Lastname: <input type='text' name='lastname' required>
  <input type='submit' name='submit' value="Add master">
</form>

<a href="/main">Main page</a>
