<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
</head>
<body>
<?php 
	$server = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "codigofacilito";


	$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)
		or die("Error en la conexion ");

		
		$edad = $_POST["txtEdad"];
		$curso = $_POST["txtCurso"];
		$ciudad = $_POST["txtCiudad"];
		$nombre = $_POST["txtNombre"];


		$insertar = "INSERT into alumnos ('edad','curso','ciudad','nombre') values ('$edad','$curso','$ciudad','$nombre')";



		$resultado = mysqli_query($conexion, $insertar) or die ("Error al insertar los registros". mysqli_error($insertar));

		mysqli_close($conexion);
		echo "Datos insertados correctamente";
?>
</body>
</html>