@extends('layouts.app')

@section('content')

<style type="text/css">
    .table td, .table th{
        vertical-align: middle;
        text-align:center;
        padding: .55rem;
    }
    
    .btn {
        margin-right: 10px;
    }
    
    .table thead th {
        text-align:center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">

			<div class="d-flex justify-content-between">
			    <h2>Usuarios</h2>
			       <div>
			           <a href="{{ route('usuario.create') }}" class="btn btn-success btn-sm">Añadir usuario</a>
			       </div>
			</div>
			
            <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->type }}</td>
                  <td><a href="{{ route('usuario.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                  <a href="#" class="btn btn-danger btn-sm">Borrar</a></td>
                </tr>
                @endforeach

                </tbody>
            </table>
            <div class="">
                <a class="btn btn-secondary" href="{{ route('ponencia.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>

@stop