@extends('layouts.base');
@section('conten');

<h2>Crear Cliente</h2>
<form action="/clientes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ci</label>
        <input type="text" id="ci" name="ci" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="text" id="edad" name="edad" class="form-control" tabindex="4">
    </div>
    <a href="/clientes" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
</form>


@endsection