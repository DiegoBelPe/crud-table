@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR REGISTROS</h2>

<form action="/coaches/{{$coach->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombres</label>
        <input id="nombres" name="nombres" type="text" class="form-control" value="{{$coach->nombres}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="email" class="form-control" value="{{$coach->correo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" value="{{$coach->telefono}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Activo</label>
        <input id="activo" name="activo" type="text" class="form-control" value="{{$coach->activo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" value="{{$coach->observaciones}}">
    </div>

    <a href="/coaches" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>


</form>

@endsection
