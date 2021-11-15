@extends('layouts.app')
@section('content')
<div class="container">
<h1>VISTA DE IMAGENES</h1>
<div >
<label for="">NOMBRE</label>
<input type="text" name="nombre" value="{{ $imagen->nombre }}" readonly>
</div>
<div>
<label for="">DISCRIPCION</label>
<input type="text" name="apellido" value="{{ $imagen->apellido }}" readonly>
</div>
<div>
<label for="">IMAGEN</label>
<input type="text" name="dni" value="{{ $imagen->dni }}" readonly>
</div>

<div>
<a href="{{ route('imagen.listar') }}"> Back</a>
</div>
</div>
@endsection