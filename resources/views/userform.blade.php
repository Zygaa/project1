<h1>Informacje o użytkowniku</h1>
<!-- {{ $errors }} -->
@if($errors -> any())
<ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
</ul>
@endif
<form action ="usercontroller" method="post">
  @csrf
  <input type="text" name="email"><br><br>
  <input type="password" name="password"><br><br>
  <input type="submit" value="Zatwierdź">
</form>
