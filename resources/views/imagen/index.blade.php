<link href="css/bootstrap.min.css" rel="stylesheet"> 
@extends('layouts.app')
@section('content')
<div class="container">

<h1>LISTA DE IMAGENES</h1>
<table class="table table-bordered">
<tr>
<th>Nro </th>
<th>Nombre </th>
<th>DISCRIPCION </th>
<th>IMAGEN </th>
<th>ACIONES </th>
</tr>
<tbody>
@forelse ($imagens as $imagen)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $imagen->nombre }}</td>
        <td>{{ $imagen->discripcion }}</td>
       

        <td>
            <img src="/imagen/{{ $imagen->imagen }}" width="60%">
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
<p> No hay ingenieros!</p>
@endforelse
</tbody>
</table>
</div>
@endsection

<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>