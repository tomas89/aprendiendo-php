<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
<<?php 
	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "codigofacilito";

	$conexion = mysqli_connect($server,$usuario,$contraseña,$bd) or die ("Error en la conexión");

	$clave = $_POST["txtClave"];


	mysqli_query($conexion,"DELETE from datos where  clave = '$clave'") or die ("Error al eliminar los datos");

	

	mysqli_close($conexion);

	echo "Datos eliminados correctamente";

 ?>
</body>
</html>