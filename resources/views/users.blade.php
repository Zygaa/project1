<h3>Użytkownicy</h3>
<ul>
  @foreach($data as $user)
    <li>Użytkownik {{$user->id}}<br>
    Imię i nazwisko: {{$user->name}} {{$user->surname}}</li>
  @endforeach
</ul>
