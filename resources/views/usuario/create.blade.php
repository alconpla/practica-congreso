@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Crear ponente</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <form method="post" class="form" action="{{url('usuario')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Type</label>
                    <select name="type" class="form-control">
                        <option selected="true" disabled="disabled">-- type</option>    
                        <option value="asistente">asistente</option>
                        <option value="ponente">ponente</option>
                        <option value="comite">comite</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('usuario.index') }}">Volver</a>
                    <input class="btn btn-primary" type="submit" value="Crear">
                </div>
            </form>
            
        </div>
    </div>
</div>

@stop