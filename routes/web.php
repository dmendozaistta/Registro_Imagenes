<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
return redirect('/imagen/listar');
});
Route::get('/imagen', 'App\Http\Controllers\TestController@crearImagen')->name('imagen.agregar');
Route::post('/imagen', 'App\Http\Controllers\TestController@registrarImagen')->name('imagen.guardar');
Route::get('/imagen/listar', 'App\Http\Controllers\TestController@listarImagens')->name('imagen.listar');
Route::get('/imagen/editar/{imagen}', 'App\Http\Controllers\TestController@formularioEditarImagen')->name('imagen.editar');
Route::patch('/imagen/editar/{imagen}', 'App\Http\Controllers\TestController@ActualizarImagen')->name('imagen.actualizar');
Route::get('/imagen/{imagen}', 'App\Http\Controllers\TestController@VerImagen')->name('imagen.ver');
Route::delete('/imagen/{imagen}', 'App\Http\Controllers\TestController@EliminarImagen')->name('imagen.eliminar');
