<link rel="stylesheet" href="{{asset('css/app.css')}}">

<h1>Aggiungi un videogame</h1>
<a href="{{ route('videogames.index')}}">< Torna Indietro</a>

<form action="{{route('videogames.store')}}" method="post">
  @csrf
  @method('POST')

  <label for="name">Nome</label>
  <input type="text" name="name" value="{{ old('name') }}">

  <label for="platform">Piattaforma</label>
  <input type="text" name="platform" value="{{ old('platform') }}">

  <label for="genre">Genere</label>
  <input type="text" name="genre" value="{{ old('genre') }}">

  <label for="year">Anno</label>
  <input type="number" name="year" value="{{ old('year') }}">

  <input type="submit" value="Invia">
</form>
