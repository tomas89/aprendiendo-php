<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>

<?php
	$server ="localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "codigofacilito";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) 
	or die("error en la conexion");

	$clave = $_POST["txtClave"];
	$nombre = $_POST["txtNombre"];


	mysqli_query($conexion, " UPDATE datos set nombre = '$nombre' where clave= '$clave' ") or die("Error al Actualizar");

	mysqli_close($conexion);

	echo"Datos actualizaddos correctamente";

	
  ?>
</body>
</html>