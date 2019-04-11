<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->
    <!-- <link rel="icon" href=""> -->

    <title>Registro de Usuario</title>

    <!-- Bootstrap core CSS -->
    :css bootstrap.min

    <!-- Custom styles for this template -->
    :css signin
  </head>

  <body class="text-center">
      <form method="post" id="actualiza_libro" class="form-signin" action="{{ @baseurl }}/api/alumno/{{$alumno.id}}/actualizar" enctype="multipart/form-data">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Actualizaciòn de Libro</h1>
      <label for="inputNombre" class="sr-only">Nombre</label>
       <input type="text" name="id" class="form-control" placeholder="Nombre" value="{{$alumno.id}}" required autofocus id="nombre">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$alumno.Nombre}}" required autofocus id="Id">
      <label for="inputAutor" class="sr-only">Autor</label>
      <input type="text"  name="autor" class="form-control" placeholder="Autor" value="{{$alumno.Autor}}" required autofocus id="autor">
      <label for="inputMatricula" class="sr-only">Editorial</label>
      <input type="text" name="editorial" class="form-control" placeholder="editorial" value="{{$alumno.Editorial}}"  required autofocus id="editorial">
      <label for="inputpaginas" class="sr-only">Paginas</label>
      <input type="text" name="paginas" class="form-control" placeholder="No de Paginas" value="{{$alumno.Numero_de_paginas}}" required autofocus id="paginas">
      <label for="inputexistencia" class="sr-only">Existencia</label>
      <input type="text"  name="existencia" class="form-control" placeholder="Existencia" value="{{$alumno.existencia}}"  required id="existencia">
      <label for="inputdescripcion" class="sr-only">Descripcion</label>
      <input type="text"  name="descripcion" class="form-control" placeholder="Descripcion" value="{{$alumno.descripcion}}" required id="descripcion">
      <!-- <label for="inputdocumento" class="sr-only">Documento</label>
      <input type="file" class="form-control"  name="archivo" placeholder="Seleccione el pdf" required> -->
      <label for="inputarchivo" class="sr-only">archivo</label>

      <input type="file" class="form-control"  name="archivo" placeholder="Seleccione un vista previa" required id="archivo"><br>
       <label for="inputexistencia" >Vista Previa</label><br>
      <img src="{{ @baseurl }}/{{$alumno.pdf}}" height="50" alt="">
      
      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="subir" type="submit">Enviar</button>
      <p class="mt-5 mb-3 text-muted"> 2019 UES SAN JOSE DEL RINCÒN DESARROLLO DE SOFTWARE</p>
    </form>
</html>
