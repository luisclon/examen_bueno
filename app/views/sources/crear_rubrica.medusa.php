:extends crear

:block formulario
<!-- <h3>Aqui estara el formulario de los docentes</h3> -->
<form class="" target=" blank" action="{{ @baseurl }}/api/rubrica/nuevo" method="post">
<label >Alumno</label>
<input type="text" name="alumno" value=""><br> 

<label >Materia</label>
<input type="text" name="materia" value=""><br> 

<label >Docente</label>
<input type="text" name="docente" value=""><br> 

<label >Tipo</label>
<input type="text" name="tipo" value=""><br> 


<label >Valor</label>
<input type="text" name="valor" value=""><br> 


<input type="submit" name="" value="guardar">
</form>

:endblock