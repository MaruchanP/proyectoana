@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2>Crear un nuevo producto</h2>
        <hr>
        <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" />
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
            </div>
            <div class="form-group">
                <label for="precio_unitario">Precio Unitario</label>
                <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" value="{{ old('precio_unitario') }}" />
            </div>
            <div class="form-group">
            <label for="imagen">Imagen</label>
<input type="file" name="imagen" id="imagen">
            </div>
            <div class="form-group">
                <label for="estatus">Estatus</label>
                <input type="text" class="form-control" id="estatus" name="estatus" value="{{ old('estatus') }}" />
            </div>
            <div class="form-group">
                <label for="existencia">Existencia</label>
                <input type="number" class="form-control" id="existencia" name="existencia" value="{{ old('existencia') }}" />
            </div>
            <button type="submit" class="btn btn-success">Guardar Producto</button>
        </form>
    </div>
</div>
@endsection
