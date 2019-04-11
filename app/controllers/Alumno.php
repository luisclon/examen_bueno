<?php
namespace Controllers;

use \Bitphp\Http\Response;
use \Bitphp\Http\Request;
use \Components\File;

use \Models\Alumnos;

class Alumno{
    private static function conexion(){
        $model =new Alumnos();
        $model::connect('biblioteca');
        $model::table('libros2');

        return $model;
        
    }

    public static function index(){

        $model = self::conexion();
        $alumnos=$model::find();
        Response::status(200);
        Response::json(array(
            'api' => '/alumno',
            'info' => 'Consulta informacion de los alumnos.',
            'alumnos' =>$alumnos
        ));


    }
    public static function nuevo(){

        $file = new File();

$nombre=Request::post('nombre');
$autor = Request::post('autor');
$editorial = Request::post('editorial');
$paginas = Request::post('paginas');
$existencia = Request::post('existencia');
$descripcion = Request::post('descripcion');
$fotografia= Request::post('pdf');
//         // echo $nombre;
    
// var_dump($_POST);
    //    Response::json($_POST);
        $model = self::conexion();

        $alumno = array(
            'Nombre'=>$nombre,
            'Autor ' => $autor,
            'Editorial'=>$editorial,
            'Numero_de_paginas'=>$paginas,
            'existencia'=>$existencia,
            'descripcion'=>$descripcion,
            'pdf'=>$fotografia
        );
 $file
    ->read('pdf')
    ->image()
    ->size(500000)
    ->upload();

    if($file->err) {
        Response::status(400);
        Response::json(array(
            'ok'=> false,
             'err'=> $file->err
    ));
        exit;
    }

    
    // echo $file->path;
    $alumno = array(
        'Nombre'=>Request::post('Nombre'),
         'Autor'=> Request::post('Autor'),
'Editorial'=> Request::post('Editorial'),
'Numero_de_paginas'=>Request::post('Numero_de_paginas'),
'existencia'=> Request::post('existencia'),
'descripcion'=> Request::post('descripcion'),
'pdf' => $file->path
        
        
    );


       $r= $model::create($alumno);
   
       if($r){
     Response::json(array(
         'ok'=> true,
         'alumno'=> $alumno
     )); 
       }else{
    Response::status(400);
    Response::json(array(
        'ok'=> false,
         'err'=>'No se pudo crear el registro'
));
       }
      
    
       

    }







    public static function buscar($id){
        $model = self::conexion();
        $condicion="id='$id'";
        $campos=array('nombre','edad');
        $resultado=$model::find($condicion,$campos);


        Response::status(200);
        Response::json(array(
            'api' => '/alumno/$id',
            'info' => 'Consulta informacion de los alumnos.',
            'alumno' =>$resultado
        ));
    }

    public static function borrar($id){
        $model = self::conexion();
        $condicion="id='$id'";
        $model::delete($condicion);

   
       
    }



    public static function actualizar($id){
        // echo "nuevo";
        $file = new File();
        $file->prevent_duplicate=false;

$nombre=Request::post('nombre');
$autor = Request::post('autor');
$editorial = Request::post('editorial');
$paginas = Request::post('paginas');
$existencia = Request::post('existencia');
$descripcion = Request::post('descripcion');
$fotografia= Request::post('pdf');


        // echo $nombre;

    //    Response::json($_POST);
        $model = self::conexion();


 $alumno = array(
            'Nombre'=>$nombre,
            'Autor' => $autor,
            'Editorial'=>$editorial,
            'Numero_de_paginas'=>$paginas,
            'existencia'=>$existencia,
            'descripcion'=>$descripcion,
            'pdf'=>$fotografia
        );
        $file
    ->read('foto')
    ->image()
    ->size(500000)
    ->upload();

    if($file->err) {
        echo $file->err;
        exit;
    }

    // $alumno = array(
    //     'nombre' => Request :: post('nombre')
    //     ,'apellidos' => Request::post('apellidos')
    //     ,'edad' => Request ::post ('edad')
    //     ,'fotografia'  => $file->path
    // );
       $r= $model::create($alumno);

        var_dump($r);
    

        $model = self::conexion();
        $condicion="id='$id'";
        $model::update($condicion,$alumno);

       

    }




}