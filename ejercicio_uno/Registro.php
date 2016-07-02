<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
</head>
<body>
<?php 
	
		
		$mysqli = new mysqli('eltrebolautorepuestos.com', 'tfbm89', '1030560485', 'tfbm89_aprendiendo_php');


		if ($mysqli->connect_errno) {
		    // La conexión falló. ¿Que vamos a hacer? 
		    // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
		    // No se debe revelar información delicada

		    // Probemos esto:
		    echo "Lo sentimos, este sitio web está experimentando problemas.";

		    // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
		    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
		    echo "Error: Fallo al conectarse a MySQL debido a: \n";
		    echo "Errno: " . $mysqli->connect_errno . "\n";
		    echo "Error: " . $mysqli->connect_error . "\n";
		    
		    // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
		    exit;
		}

		$sql = "INSERT into alumnos (nombre,apellido,curso) values (txtNombre,txtApellido,txtCurso) ";


		

		if (!$resultado = $mysqli->query($sql)) {
    // ¡Oh, no! La consulta falló. 
    echo "Lo sentimos, este sitio web está experimentando problemas.";

    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
?>
</body>
</html>