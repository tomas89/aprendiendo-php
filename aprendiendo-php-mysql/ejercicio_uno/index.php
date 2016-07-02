<!DOCTYPE>
<html>
<head>
	<title>php mysql</title>
</head>
<body>
		<form action="Registro.php" method="POST">
			
			Edad:  <input type="text" name="txtEdad"><br/>
			Curso: <input type="text" name="txtCurso"><br/>
			Ciudad: <input type="text" name="txtCiudad"><br/>
			Nombre: <input type="text" name="txtNombre"><br/>
			
			
			<input type="submit" name="Registrar" name="btnRegistrar">
		</form>

		<br/>
		<br/>
	    <br/>
		<br/>

		<form action="Eliminar.php" method="POST">
			
			clave: <input type="text" name="txtClave"><br/>
			<input type="submit" value="Eliminar Registro" name="btnEliminar">
		</form>


		<br/>
		<br/>
	    <br/>
		<br/>

		<form action="Actualizar.php" method="POST">
			clave: <input type="text" name="txtClave">
			Nombre: <input type="text" name="txtNombre"><br/>
			<input type="submit" value="Actualizar Registro" name="btnActualizar" >
		</form>
</body>
</html>