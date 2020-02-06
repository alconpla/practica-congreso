@extends('layouts.app')
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-5">
           <h2> Editar usuario</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('usuario/' . $user->id) }}" method="post" class="form" id="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" value="{{ old('name', $user->name) }}" name="name" class="form-control" placeholder="Name"/>
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control" value="{{ $user->type }}">
                        <option value="{{ $user->type }}">{{ $user->type }}</option>
                        
                        @if ($user->type != 'asistente')
                            <option value="asistente">asistente</option>
                        @endif
                        @if ($user->type != 'ponente')
                            <option value="ponente">ponente</option>
                        @endif
                        @if ($user->type != 'comite')
                            <option value="comite">comite</option>
                        @endif
                        @if ($user->type != 'admin')
                            <option value="admin">admin</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('usuario.index') }}">Volver</a>
                    <input type="submit" value="Editar" id="form-button" class="btn btn-primary">
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection