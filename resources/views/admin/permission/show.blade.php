@extends('adminlte::page')

@section('title', 'Permissão')

@section('content_header')
    <h1>Permissão - {{ $permission->name }} <a href="{{ route('permissions.index') }}" class="btn btn-dark btn-sm"><<</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: {{ $permission->name }}</strong>
                </li>
                <li>
                    <strong>Descrição: {{ $permission->description }}</strong>
                </li>
            </ul>
            @include('admin.includs.alerts')
            <form action="{{ route('permissions.destroy', $permission->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm ml-3">Deletar permissão</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop