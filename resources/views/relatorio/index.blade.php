@extends('layouts.app')
@section('content')
<div class="container">
<h1>Relatório de atividades</h1>
<ul class="list-group">
@foreach($relatorios as $relatorio)
  <li class="list-group-item">{{$relatorio->titulo}}</li>
  <li class="list-group-item">{{$relatorio->descricao}}</li>
  <li class="list-group-item">{{$relatorio->link}}</li>
  <li class="list-group-item">{{$relatorio->videos}}</li>
  <li class="list-group-item">{{$relatorio->fotos}}</li>
  <li class="list-group-item">{{$relatorio->descimg1}}</li>
  <br>
@endforeach
</ul>
{{ $noticias->links() }}
</div>



@endsection;