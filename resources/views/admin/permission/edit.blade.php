@extends('adminlte::page')

@section('title', 'Atualizar permissão')

@section('content_header')
    <h1>Atualizar permissão <a href="{{ route('permissions.index') }}" class="btn btn-dark btn-sm"><<</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id)}}" method="post">
                @csrf
                @method('PUT')
                @include('admin.pages.permission.includs.com')

                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-sm">Atualizar</button>
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