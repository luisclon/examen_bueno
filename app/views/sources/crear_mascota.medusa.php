:extends crear

:block formulario

<form class="" target=" blank" action="{{ @baseurl }}/api/mascota/nuevo" method="post">
<label >Nombre</label>
<input type="text" name="nombre" value=""><br> 
<br> 
<label >Especie</label>
<input type="text" name="especie" value=""><br>
<br> 
<label >Raza</label>
<input type="text" name="raza" value=""><br>
<br> 
<label >Color</label>
<input type="text" name="color" value=""><br>
<br> 
<label >Edad</label>
<input type="number" name="edad" value=""><br>
<br> 
<label >Nombre del dueño </label>
<input type="text" name="nombredueño" value=""><br> 
<br> 
<label >Edad del dueño</label>
<input type="text" name="edaddueño" value=""><br>
<br> 
<label >Correo del dueño</label>
<input type="text" name="correo" value=""><br>
<br> 
<label >Telefono</label>
<input type="text" name="telefono" value=""><br>
<br> 
<input type="submit" name="" value="guardar">
</form>

:endblock