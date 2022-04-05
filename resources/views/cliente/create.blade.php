@extends('layouts.base');
@section('conten')

<h2>Crear Cliente</h2>
<form action="/clientes" method="POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{ old('codigo')}}">
        {!! $errors->first('codigo','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ci</label>
        <input type="text" id="ci" name="ci" class="form-control" tabindex="2" value="{{old('ci')}}">
        {!! $errors->first('ci','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="3" value="{{old('nombre')}}">
        {!! $errors->first('nombre','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="text" id="edad" name="edad" class="form-control" tabindex="4" value="{{old('edad')}}">
        {!! $errors->first('edad','<small style="color:red"> :message </small>') !!} <br>
    </div>
    <a href="/clientes" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
</form>


@endsection