@extends('adminlte::page')

@section('title', 'Permissão')

@section('content_header')
<h1>Permissão <a href="{{ route('permissions.create') }}" class="btn btn-success btn-sm">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="" class="form-inline" method="get">
                <div class="form-group">
                    <input type="text" value="{{$request->q ?? ''}}"  name="q" class="form-control">
                </div>
            <button type="submit" class="btn btn-info ml-1">buscar</button>
            </form>
            @include('admin.includs.alerts')
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th> NOME </th>
                        <th width="250"> AÇOES </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td style="display: flex">
                                <a href="{{ route('permissions.show', $permission->id) }}" title="Ver Permissão" class="btn btn-warning btn-sm">
                                    <i class="fa  fa-eye"></i>
                                </a>
                                
                                <a href="{{ route('permissions.edit', $permission->id) }}" title="Editar" class="btn btn-info btn-sm ml-1">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {!! $permissions->links() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop