@extends('layouts.app')
@section('content')
<div class="container">
<h1>Esportes</h1>
<ul class="list-group">
@foreach($esportes as $esporte)
  <li class="list-group-item">{{$esporte->tipo}}</li>
  <li class="list-group-item">{{$esporte->descricao}}</li>
  <br>
@endforeach
</ul>
{{ $esportes->links() }}
</div>

@endsection;