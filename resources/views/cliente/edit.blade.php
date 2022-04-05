@extends('layouts.base')
@section('conten')

<h2>Crear Cliente</h2>
<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" value="{{$cliente->codigo,old('codigo')}}">
        {!! $errors->first('codigo','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ci</label>
        <input type="text" id="ci" name="ci" class="form-control" value="{{$cliente->ci,old('ci')}}">
        {!! $errors->first('ci','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$cliente->nombre,old('nombre')}}">
        {!! $errors->first('nombre','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="text" id="edad" name="edad" class="form-control" value="{{$cliente->edad,old('edad')}}">
        {!! $errors->first('edad','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <a href="/clientes" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-primary">Editar</button>
    
</form>


@endsection