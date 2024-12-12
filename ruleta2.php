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
			 

			 // Consulta SQL
// Consulta SQL para obtener un valor específico
$id = "SELECT Id_usuario from tabla_usuarios as id where Correo_Electrónico = '$email' and contraseña = '$contraseña'";

$sql = "SELECT Saldo from tabla_usuarios as saldo where Correo_Electrónico = '$email' and contraseña = '$contraseña'";
$resultado1 = $conexion->query($id);
$resultado2 = $conexion->query($sql);
if ($resultado1->num_rows > 0) {
    // Obtener el valor
    $fila = $resultado1->fetch_assoc();
    $valor1 = $fila['Id_usuario']; // Almacena el resultado en una variable
}

// Verificar si hay resultados
if ($resultado2->num_rows > 0) {
    // Obtener el valor
    $fila = $resultado2->fetch_assoc();
    $valor2 = $fila['Saldo']; // Almacena el resultado en una variable


    // Comparar con un número
    if ($apostado > $valor2) {
        header("location: ErrorApostarMasCuenta.php");
    } else {

        $sql = "INSERT INTO tabla_jugada (Id_usuario, Fecha, Apuesta, Color) VALUES ('$valor1','(GETDATE())','$apostado','$color')";
		//se ejecuta la sentencia y se gurada el resultado en resultado
		$resultado = $conexion->query($sql);

		echo "Todo correcto";

		// Genera un número aleatorio entre 1 y 100
		$numeroAleatorio = rand(1, 38);
		
		echo $numeroAleatorio;

		if ($numeroAleatorio % 2 == 0) {
			echo "ROJO";
		} else {
			echo "NEGRO";
		}

    }
}
		?>

	</body>
</html>