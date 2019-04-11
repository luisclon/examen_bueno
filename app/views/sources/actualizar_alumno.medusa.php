:extends crear

:block formulario
<h1>Actualizar el registro</h1>

<form class="" target=" blank" action="{{ @baseurl }}/api/alumno/{{$alumno.id}}/actualizar" method="post" enctype="multipart/form-data">
<label >Nombre</label>
<input type="text" name="nombre" value="{{$alumno.nombre}}"><br><br>
<label >Apellidos</label>
<input type="text" name="apellidos" value="{{$alumno.apellidos}}"><br><br> 
<label >Edad</label>
<input type="number" name="edad" value="{{$alumno.edad}}"><br><br> 

<label >Fotografia</label>
<img src="{{ @baseurl }}/{{$alumno.fotografia}}" height="50" alt="">
<input type="file" name="foto" value=""><br> <br>

<input type="submit" name="submit" value="guardar">
</form>

:endblock