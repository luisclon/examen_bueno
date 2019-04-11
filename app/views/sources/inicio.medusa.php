<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>plataforma de registros de libros</title>

    <!-- Bootstrap core CSS -->
    :css bootstrap.min

    <!-- Custom styles for this template -->
    :css carousel
  <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="navbar-header">    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>        
  </div>        
  <a class="na" ></a>
  
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
           
          <ul class="navbar-nav mr-auto">
     

              <li class="nav-item">
                  <a class="nav-link" href="{{ @baseurl }}/alumno/crear"><span class="fa fa-envira"></span >Registrarse</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href=" {{ @baseurl }}/api/alumno/"><span class="fa fa-male"></span >Consulta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ @baseurl }}/alumno/actualizar/70"><span class="fa  fa-server"></span >Actualizar</a>
            </li>
          </ul>
        </div>
        <form class="form-inline mt-2 mt-md-0" action="{{ @baseurl }}/alumno/actualizar">
            <input class="form-control mr-sm-2" name="id_a" type="text" placeholder="Id Actualizar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Actualizar</button>
          </form>
      </nav>
    </header> 
 <h1 class="encabezado">PLATAFORMA DE REGISTRO DE LIBROS</h1>

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    :js jquery-slim.min
    :js popper.min
    :js bootstrap.min
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    :js holder.min
  </body>
</html>
