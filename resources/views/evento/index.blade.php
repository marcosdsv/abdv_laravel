@extends('layouts.app')
@section('content')
<div class="container">
<h1>Eventos</h1>
<ul class="list-group">
@foreach($eventos as $evento)
  <li class="list-group-item">{{$evento->titulo}}</li>
  <li class="list-group-item">{{$evento->descricao}}</li>
  <br>
@endforeach
</ul>
{{ $eventos->links() }}
</div>

@endsection;