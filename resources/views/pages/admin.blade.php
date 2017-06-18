<form action="/addservice" method="post">
  {{csrf_field()}}
  Service: <input type="text" name="service" required>
  Price: <input type="text" name="price" required>
  <input type="submit" name="add" value="add">
</form>
