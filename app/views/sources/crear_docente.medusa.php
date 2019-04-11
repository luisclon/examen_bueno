:extends crear

:block formulario
<!-- <h3>Aqui estara el formulario de los docentes</h3> -->
<form class="" target=" blank" action="{{ @baseurl }}/api/docente/nuevo" method="post">
<label >Nombre</label>
<input type="text" name="nombre" value=""><br> 
<label >Apellidos</label>
<input type="text" name="apellidos" value=""><br> 
<label >Edad</label>
<input type="number" name="edad" value=""><br> 
<label >Asignatura</label>
<input type="text" name="asignatura" value=""><br> 
<input type="submit" name="" value="guardar">
</form>

:endblock