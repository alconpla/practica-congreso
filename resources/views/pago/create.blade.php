@extends('layouts.app')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Pagar congreso</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <form method="post" class="form" action="{{url('pago')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="documento">Suba el pdf del pago</label>
                    <br>
                    <input type="file" id="docuemento" name="documento">
                </div>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('ponencia.index') }}">Volver</a>
                    <input class="btn btn-primary" type="submit" value="Pagar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection