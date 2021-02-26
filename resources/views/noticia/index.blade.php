@extends('layouts.app')
@section('content')
<div class="container">
<h1>Notícias</h1>
<ul class="list-group">
@foreach($noticias as $noticia)
  <li class="list-group-item">{{$noticia->titulo}}</li>
  <li class="list-group-item">{{$noticia->descricao}}</li>
  <br>
@endforeach
</ul>
{{ $noticias->links() }}
</div>

@endsection;