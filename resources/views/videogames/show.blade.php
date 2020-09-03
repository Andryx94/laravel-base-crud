<h2>{{$videogame->name}}</h2>
<ul>
  <li>Piattaforma: {{$videogame->platform}}</li>
  <li>Genere: {{$videogame->genre}}</li>
  <li>Anno: {{$videogame->year}}</li>
  <li><a href="{{ route('videogames.index')}}">< Torna Indietro</a></li>
</ul>
