<link rel="stylesheet" href="{{asset('css/app.css')}}">

<h1>Modifica {{$videogame->name}}</h1>
<a href="{{ route('videogames.show', $videogame->id)}}">< Torna Indietro</a>

<form action="{{route('videogames.update', $videogame->id)}}" method="post">
  @csrf
  @method('PUT')

  <label for="name">Nome</label>
  <input type="text" name="name" value="{{ $videogame->name }}">

  <label for="platform">Piattaforma</label>
  <input type="text" name="platform" value="{{ $videogame->platform }}">

  <label for="genre">Genere</label>
  <input type="text" name="genre" value="{{ $videogame->genre }}">

  <label for="year">Anno</label>
  <input type="number" name="year" value="{{ $videogame->year }}">

  <input type="submit" value="Invia">
</form>
