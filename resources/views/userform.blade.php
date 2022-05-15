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
  <input type="text" name="imie" placeholder="Imię"><br><br>
  <input type="email" name="email" placeholder="Adres email">
  @error('email')
    {{ $message }}
  @enderror
  <br><br>
  <input type="password" name="password" placeholder="Hasło">
  @error('password')
    {{ $message }}
  @enderror
  <br><br>
  <input type="radio" name="plec" id="mezczyzna">
  <label for="mezczyzna">Mężczyzna</label>
  <input type="radio" name="plec" id="kobieta">
  <label for="kobieta">Kobieta</label><br><br>
  <input type="submit" value="Zatwierdź">
</form>
