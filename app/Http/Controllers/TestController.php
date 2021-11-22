<?php
namespace App\Http\Controllers;
use App\Models\imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TestController extends Controller
{
public function crearImagen()
{
return view('imagen.crear');
}
public function registrarImagen(Request $request)
{
$reglas = [
'nombre' => 'required',
'discripcion' => 'required'
];
$mensajeDeError = [
'required' => 'Ingreso de datos erróneo'
];
$this->validate($request, $reglas, $mensajeDeError);
imagen::create([
    'nombre' => $request->nombre,
    'discripcion' => $request->discripcion,
    'imagen' => $request->imagen
]);
$this->mensaje('message',' creado correctamente!');
return redirect()->back();
}
public function listarImagens()
{
$imagens = imagen::toBase()->get();
return view('imagen.index',compact('imagens'));
}
public function formularioEditarImagen(imagen $imagen)
{
echo "Formulario De Edicion";
return view('imagen.edit',compact('imagen'));
}
public function ActualizarImagen(Request $request, imagen $imagen)
{
echo "FORMULARIO PARA EDITAR imagenes";
$reglas = [
'nombre' => 'required',
'discripcion' => 'required',
'imagen' => 'required'
];
$mensajeDeError = [
'required' => 'Ingreso de datos erróneo'
];
$this->validate($request, $reglas, $mensajeDeError);
$imagen->update([

'nombre' => $request->nombre,
'discripcion' => $request->discripcion,
'imagen' => $request->imagen
]);
$this->mensaje('message','imagen Actualizado Correctamente!');
return redirect()->back();
}
public function VerImagen(imagen $imagen)
{
return view('imagen.view',compact('imagen'));
}
public function EliminarImagen(imagen $imagen)
{
$imagen->delete();
$this->mensaje('message','imagen Eliminado Correctamente');
return redirect()->back();
}
public function mensaje(string $nombre = null, string $mensaje = null)
{
return session()->flash($nombre,$mensaje);
}
}
