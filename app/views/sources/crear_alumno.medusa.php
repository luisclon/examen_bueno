:extends crear

:block formulario
<h1>Crear Registro</h1>
<form id="crear_alumno" class="" target=" blank" action="{{ @baseurl }}/api/alumno/nuevo" method="post" enctype="multipart/form-data">

<label >Nombre</label>
<input type="text" name="nombre" value="" id="alumno_nombre"><br><br>
<label >Apellidos</label>
<input type="text" name="apellidos" value="" id="apellidos"><br><br> 
<label >Edad</label>
<input type="number" name="edad" value="" id="edad"><br><br> 

<label >Fotografia</label>
<input type="file" name="foto" value="" id="foto"><br> <br>

<input type="submit" name="submit" id="btn_ingresar" value="guardar">
</form>
<script type="text/javascript">
var form_url="{{@baseurl}}/api/alumno/nuevo";
</script>
:js crear_alumno
:endblock