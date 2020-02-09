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
            <form method="post" class="form" action="{{url('ponencia')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="titulo">Titulo de la ponencia</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Introducir titulo">
                </div>
                <div class="form-group">
                    <label for="video">Url video</label>
                    <input type="text" name="video" class="form-control" id="video" placeholder="Url del video">
                </div>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('ponencia.index') }}">Volver</a>
                    <input class="btn btn-primary" type="submit" value="Crear">
                </div>
            </form>
            
        </div>
    </div>
</div>

@stop