@extends('layouts.app')

@section('content')

@foreach($congreso as $con)
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{ $con->titulo }}</h1>
    <p class="lead">{{ $con->descripcion }}</p>
    <p class="font-weight-bold lead">{{ $con->precio }} €</p>
    <a class="btn btn-primary" href="">Pagar congreso</a>
  </div>
</div>
@endforeach

@stop