@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Ponencias</h1>
		<p class="lead">Consulta todas las ponencias del congreso.</p>
		@auth
		@if (Auth::user()->type == 'ponente')
			<a href="{{ route('ponencia.create') }}" class="btn btn-warning btn">
				Crear ponencia
			</a>
		@endif
		@endauth
		<a class="btn btn-primary" href="{{ route('pago.create') }}">Pagar congreso</a>
	</div>
</div>
<div class="container">
	<div class="row">
		@foreach($ponencia as $pon)
		<div class="col-md-4">
				<div class="card mb-5" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">{{ $pon->titulo }}</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="{{ route('ponencia.show', $pon->id) }}" class="btn btn-primary">Ver ponencia</a>
					</div>
				</div>
		</div>
		@endforeach
	</div>
</div>

@stop