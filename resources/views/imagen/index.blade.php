<link href="css/bootstrap.min.css" rel="stylesheet"> 
<style>
    tbody{
        background-color: #FDD28D;
    }
    div{
        background-image:url("https://p4.wallpaperbetter.com/wallpaper/623/721/164/for-desktop-nature-scenes-beautiful-scenery-1920x1080-wallpaper-preview.jpg");
    }
    
</style>
@extends('layouts.app')
@section('content')
<h1 style="color:white " >LISTA DE IMAGENES</h1>
<div class="container">

<table class="table table-bordered">
<tr>
<th>Nro </th>
<th>NOMBRE </th>
<th>DISCRIPCION </th>
<th>IMAGEN </th>
<th>ACCIONES </th>
</tr>
<tbody>
@forelse ($imagens as $imagen)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $imagen->nombre }}</td>
        <td>{{ $imagen->discripcion }}</td>
       

        <td width="250px" position="center">
            <img src="/imagen1/img/{{ $imagen->imagen }}" width="20%" higth="10%">
        </td>
  <td>
      
      <a  href="{{ route('imagen.editar', $imagen->discripcion) }}">Editar</a>
      <a  href="{{ route('imagen.ver', $imagen->discripcion) }}">Ver</a></button>
      <a  href="" onclick="if(confirm('¿Eliminar {{ $imagen->nombre }} ?'))event.preventDefault();document.getElementById('borrar-{{ $imagen->discripcion }}').submit();">Eliminar</a></button>
        
<form id="borrar-{{ $imagen->discripcion }}" method="post"
action="{{ route('imagen.eliminar', $imagen->discripcion) }}">
@csrf

@method('DELETE')
</form>
</td>
</tr>
@empty
@endforelse
</tbody>
</table>
</div>
@endsection

