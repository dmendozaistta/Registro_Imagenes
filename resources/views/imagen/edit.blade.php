@extends('layouts.app')
@section('content')
<style>
    form{
        background-color: #FDD28D;
        width:12cm;
    }
    div{
        background-color: #FDD28D;
    }
    label{
        color:black;
    }
    #imagen{
        background-color:black;
        color:white;
        height: 1cm;
        width: 2cm;
    }
</style>
<div class="container">
<h1 style="color:black ">EDITAR IMAGEN</h1>
<form action="{{ route('imagen.actualizar', $imagen->discripcion) }}" method="post">
@csrf
@method('patch')
<div class="form-group">
<label for="">Nombre</label>
<input type="text" name="nombre" value="{{ $imagen->nombre }}">
</div>
<div class="form-group">
<label for="">Descripcion</label>
<input type="text" name="discripcion" value="{{ $imagen->discripcion }}">
</div>
<div class="form-group">
<label for="">Imagen</label>
<input type="file" name="imagen" value="{{ $imagen->imagen }}">
</div>
<div class="form-group" style="margin-top: 24px;">
<input id="imagen" type="submit" value="Actualizar">
</div>
</div>
</div>
</form>
@endsection