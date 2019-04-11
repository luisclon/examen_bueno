:extends crear

:block formulario
<!-- <h3>Aqui estara el formulario de los docentes</h3> -->
<form class="" target=" blank" action="{{ @baseurl }}/api/grupo/nuevo" method="post">
<label >Nombre</label>
<input type="text" name="nombre" value=""><br> 

<label >Carrera</label>
<input type="text" name="carrera" value=""><br> 

<label >Aula</label>
<input type="text" name="aula" value=""><br> 


<input type="submit" name="" value="guardar">
</form>

:endblock