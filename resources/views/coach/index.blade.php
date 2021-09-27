@extends('layouts.plantillabase');

@section('contenido')
<a href="coaches/create" class="btn btn-warning">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Activo</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $coaches as $coach )
        <tr>
            <td>{{$coach->id}}</td>
            <td>{{$coach->nombres}}</td>
            <td>{{$coach->correo}}</td>
            <td>{{$coach->telefono}}</td>
            <td>{{$coach->activo}}</td>
            <td>{{$coach->observaciones}}</td>

            <td>
                <form action="{{route('coaches.destroy',$coach->id)}}" method="POST">
                    <a href="/coaches/{{$coach->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>

</table>
@endsection
