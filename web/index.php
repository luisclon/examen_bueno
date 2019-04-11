<?php

require '../autoload.php';

use \Bitphp\Route;
use \Bitphp\Layout\Medusa;
use \Bitphp\Http\Response;



Route::match('Get /', function(){
   Response::status(200);
   Medusa::draw('inicio');

});


Route::match('Get /api/alumno', 'alumno@index');
Route::match('POST /api/alumno/nuevo', 'alumno@nuevo');
Route::match('Get /alumno/crear', 'interfaz@crear_alumno');
Route::match('Get /alumno/actualizar', 'interfaz@actualiza_libro');
Route::match('Get /alumno/actualizar/int$id','interfaz@actualiza_libro');
Route::match('POST /api/alumno/int$id/actualizar', 'alumno@actualizar');
