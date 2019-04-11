<?php

require '../autoload.php';

use \Bitphp\Route;
use \Bitphp\Layout\Medusa;
use \Bitphp\Http\Response;



Route::match('Get /api', function(){
   Response::status(200);
   Response::json(array(
         'version' => 0.1,
         'info' =>'Sistema de Control de mascotas.'
   ));

});



Route::match('POST /api/mascota/nuevo', 'mascota@nuevo');
Route::match('GET /api/mascota/int$id', 'mascota@buscar');
Route::match('GET api/mascota/int$id/borrar', 'mascota@borrar');
Route::match('Get /mascota/crear', 'interfaz@crear_docente');