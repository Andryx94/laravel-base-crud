<h2>{{$videogame->name}}</h2>
<ul>
  <li>Piattaforma: {{$videogame->platform}}</li>
  <li>Genere: {{$videogame->genre}}</li>
  <li>Anno: {{$videogame->year}}</li>
  <li><a href="{{ route('videogames.edit', $videogame->id)}}">Modifica</a></li>

  <form action="{{ route('videogames.destroy', $videogame->id)}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cancella">    
  </form>

  <li><a href="{{ route('videogames.index')}}">< Torna Indietro</a></li>
</ul>
