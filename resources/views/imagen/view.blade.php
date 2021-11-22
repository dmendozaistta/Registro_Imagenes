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
        color:black;
        height: 1cm;
        width: 2cm;
    }
</style>
<div class="container">
<h1 style="color:black " >VISTA DE IMAGEN</h1>
<div >
<label for="">NOMBRE</label>
<input type="text" name="nombre" value="{{ $imagen->nombre }}" readonly>
</div>
<div>
<label for="">DESCRIPCION</label>
<input type="text" name="discripcion" value="{{ $imagen->discripcion }}" readonly>
</div>
<div>
<label for="">IMAGEN</label>
<input type="text" name="imagen" value="{{ $imagen->imagen }}" readonly src="/imagen/{{ $imagen->imagen }}">
</div>
<td>
    <img src="/imagen1/img/{{ $imagen->imagen }}" width="10%">
</td>
<div>
<a href="{{ route('imagen.listar') }}" style="color: black"><-Atras</a>
</div>
</div>
@endsection