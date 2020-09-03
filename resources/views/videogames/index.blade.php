{{-- To do list:
1- sistemare codice;
2- aggiungere validazione dati;
3- aggiungere commenti;
4- formattare con sass; --}}

<h1>Lista Videogame</h1>
<a href="{{route('videogames.create')}}">Aggiungi</a>

@foreach ($videogames as $videogame)
  <h2>{{$videogame->name}}</h2>
  <ul>
    <li>Piattaforma: {{$videogame->platform}}</li>
    <li>Genere: {{$videogame->genre}}</li>
    <li>Anno: {{$videogame->year}}</li>
    <li><a href="{{ route('videogames.show', $videogame->id )}}">Dettagli</a></li>
  </ul>
@endforeach
