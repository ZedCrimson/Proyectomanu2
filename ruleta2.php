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
		
		<title>Casino Locowin</title>
	</head>
	<header>
	</header>
	<body>
		<?php
			 //ESTABLEZCO CONEXION
			 require 'conexion.php';

			 //obtengo los datos introducidos en el formulario anterior
             $email = $_POST['email'];
			 $contraseña = $_POST['contraseña'];
			 $color= $_POST['color'];
             $apostado= $_POST['apostado'];

			 $condicion1=mysql_query("SELECT Saldo from tabla_usuario as saldo where Correo_Electrónico = '$email' and contraseña = '$contraseña';");
			 $condicion12=mysql_fetch_assoc($condicion1);
			 $condicion123=$condicion12["saldo"];
		?>

	</body>
</html>