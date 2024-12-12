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
			 $color= $_POST['color'];
             $apostado= $_POST['apostado'];
			 $valorid= $_POST['user_id'];
			 

			 // Consulta SQL
// Consulta SQL para obtener un valor específico

$sql = "SELECT Saldo from tabla_usuarios as saldo where Id_usuario ='$valorid'";

$resultado2 = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado2->num_rows > 0) {
    // Obtener el valor
    $fila = $resultado2->fetch_assoc();
    $valor2 = $fila['Saldo']; // Almacena el resultado en una variable


    // Comparar con un número
    if ($apostado > $valor2) {
        header("location: ErrorApostarMasCuenta.php");
    } else {

       

		// Genera un número aleatorio entre 1 y 100
		$numeroAleatorio = rand(1, 38);
		
		echo $numeroAleatorio;

		if ($numeroAleatorio % 2 == 0) {
			$numerocolor="ROJO";
		} else {
			$numerocolor="NEGRO";
		}

		if ($color == $numerocolor) {
			$res="GANADOR";
			echo "HAS GANADO!!";
			//se prepara la sentencia sql
			$sql = "UPDATE tabla_usuarios SET Saldo = Saldo + $apostado where Id_usuario ='$valorid'";
			$resultado = $conexion -> query($sql);

		} else {
			$res="PERDEDOR";
			echo "HAS PERDIDO";
			//se prepara la sentencia sql
			$sql = "UPDATE tabla_usuarios SET Saldo = Saldo - $apostado where Id_usuario ='$valorid'";
			$resultado = $conexion -> query($sql);
		}

		$sql = "INSERT INTO tabla_jugada (Id_usuario, Fecha, Apuesta, Color, Número_Ganador, Color_Ganador, Resultado) VALUES ('$valorid','(NOW())','$apostado','$color', '$numeroAleatorio', '$numerocolor', '$res' )";
		//se ejecuta la sentencia y se gurada el resultado en resultado
		$resultado = $conexion->query($sql);

		echo "Todo correcto";

    }
}
		?>

	</body>
</html>