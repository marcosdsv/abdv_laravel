@extends('adminlte::page')

@section('title', 'Cadastrar permissão')

@section('content_header')
    <h1>Cadastrar permissão <a href="{{ route('permissions.index') }}" class="btn btn-dark btn-sm"><<</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.store')}}" method="post">
                @csrf
                @include('admin.pages.permission.includs.com')

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
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