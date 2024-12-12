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
		
		<title>Gimnasio No+Panza</title>
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

             $cantidadusu = "SELECT Saldo From tabla_usuarios WHERE Correo_electrónico = 'dinero@locowin.com'and contraseña = 'locowin';";

             $condicion1 = mysqli_query( $conexion, $cantidadusu);

            if ($apostado > $condicion1) {
                echo "Te has pasado";
            }else{
                echo "No te has pasado";
            }
		?>

	</body>
</html>