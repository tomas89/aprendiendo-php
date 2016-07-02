<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
</head>
<body>
<?php 
	$server = "eltrebolautorepuestos.com";
	$usuario = "tfbm89";
	$contraseña = "1030560485";
	$bd = "tfbm89_aprendiendo_php";


	$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)
		or die("Error en la conexion ");

		
		$nombre = $_POST["txtNombre"];
		$apellido = $_POST["txtApellido"];
		$curso = $_POST["txtCurso"];
	




		$insertar = "INSERT into alumnos  values ('$nombre','$apellido','$curso')";

		$insertar = "INSERT into datos values (  '$clave','$nombre','$sexo')";



		$resultado = mysqli_query($conexion, $insertar) or die ("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";
?>
</body>
</html>