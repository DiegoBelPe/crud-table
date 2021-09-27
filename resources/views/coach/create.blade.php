@extends('layouts.plantillabase');

@section('contenido')

<h2>CREAR REGISTROS</h2>

<form action="/coaches" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombres</label>
        <input id="nombres" name="nombres" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="correo" name="correo" type="email" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Activo</label>
        <input id="activo" name="activo" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" tabindex="5">
    </div>

    <a href="/coaches" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>


</form>

@endsection
