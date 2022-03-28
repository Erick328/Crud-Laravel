@extends('layouts.base');
@section('conten');

<a href="clientes/create" class="btn btn-primary"> Crear Cliente</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">CI</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EDAD</th>
            <th scope="col">ACCIONES</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->codigo}}</td>
                <td>{{$cliente->ci}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->edad}}</td>
                <td>
                    <form action="{{route ('clientes.destroy',$cliente->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    
                </td>

                
            </tr>
        @endforeach
    </tbody>
</table>


@endsection