<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="images/icono.png">
	<link rel="stylesheet" href="estilos.css">

	<title>Locowin</title>
</head>
<header>

</header>

<body>

    
	<?php
	//ESTABLEZCO CONEXION
	require 'conexion.php';

	//obtengo los datos introducidos en el formulario anterior
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

	//se prepara la sentencia sql
	$sql = "INSERT INTO tabla_usuarios (Nombre, Apellido, Correo_electrónico, Contraseña) VALUES ('$nombre','$apellido','$email','$contraseña')";
	//se ejecuta la sentencia y se gurada el resultado en resultado
	$resultado = $conexion->query($sql);

	if ($resultado > 0) {
		header("location: Index.php");
	} else {
		echo "<p class='alert alert-danger'>Ha habido un error</p>";
	}
	echo "<p><a class='btn btn-primary' href='Index.php'>Regresar</a></p>";


	?>

</body>

</html>