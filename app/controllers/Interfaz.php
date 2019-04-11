<?php
namespace controllers;
use \Bitphp\Layout\Medusa;
use \Models\Alumnos;
class Interfaz{
    private static function conexion(){
        $model =new Alumnos();
        $model::connect('biblioteca');
        $model::table('libros2');

        return $model;
        
    }

    public static function crear_alumno(){
        Medusa::draw('alta_libro');
    }
    public static function actualiza_libro($id){

        $model = self::conexion();
        $condicion="id='$id'";
        $resultado=$model::find($condicion);
        // var_dump($resultado[0]['Fotografia']); //VER VALOR REAL DE LA VARIABLE
        Medusa::draw ('actualiza_libro', array ('alumno'=> $resultado[0]));
    }
    
}