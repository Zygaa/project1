<h3>Podaj swoje dane</h3>
<form action ="userform" method="post">
  @csrf
  <input type="text" name="name" placeholder="Imię"><br><br>
  <input type="text" name="surname" placeholder="Nazwisko">
  <br><br>
  <input type="date" name="birthday" placeholder="Data urodzenia">
  <br><br>
  <input type="submit" value="Zatwierdź">
</form>
