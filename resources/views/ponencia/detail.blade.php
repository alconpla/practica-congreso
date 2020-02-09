@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="card mb-3">
                  @if(!empty($pago))
                      <iframe width="100%" height="500" src="{{ $ponencia->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  @else
                      <div class="text-center mt-5 mw-100 h-75 d-inline-block" style="height=500px;">
                        <p class="btn btn-outline-danger">Debes pagar el congreso para ver este video</p>
                      </div>
                  @endif
                  <div class="card-body">
                    <h5 class="card-title">{{ $ponencia->titulo }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
            </div>
            <a class="btn btn-secondary" href="{{ route('ponencia.index') }}">Volver</a>
        </div>
    </div>
</div>

@stop