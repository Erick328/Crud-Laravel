@extends('layouts.base');
@section('conten');

<h2>Crear Cliente</h2>
<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" value="{{$cliente->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ci</label>
        <input type="text" id="ci" name="ci" class="form-control" value="{{$cliente->ci}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$cliente->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="text" id="edad" name="edad" class="form-control" value="{{$cliente->edad}}">
    </div>
    <a href="/clientes" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
    
</form>


@endsection