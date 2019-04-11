:extends crear

:block formulario
<!-- <h3>Aqui estara el formulario de los docentes</h3> -->
<form class="" target=" blank" action="{{ @baseurl }}/api/asignatura/nuevo" method="post">
<label >Nombre</label>
<input type="text" name="nombre" value=""><br> 

<label >Grupo</label>
<input type="text" name="grupo" value=""><br> 

<input type="submit" name="" value="guardar">
</form>

:endblock