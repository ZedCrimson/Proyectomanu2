<!doctype html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="shortcut icon" href="Recursos/icono.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino Locowin</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<header>
  <div class="jumbotron text-center">
    <div class="page-header">
    </div>
  </div>
</header>
	<body>


		<?php
			 //ESTABLEZCO CONEXION
			 require 'conexion.php';

			 //obtengo los datos introducidos en el formulario anterior
			 $color= $_POST['color'];
             $apostado= $_POST['apostado'];
			 $valorid= $_POST['user_id'];
			 



$sql = "SELECT Saldo from tabla_usuarios as saldo where Id_usuario ='$valorid'";

$resultado2 = $conexion->query($sql);

if ($resultado2->num_rows > 0) {
    $fila = $resultado2->fetch_assoc();
    $valor2 = $fila['Saldo'];



    if ($apostado > $valor2) {
        header("location: ErrorApostarMasCuenta.php");
    } else {

       

		// Genera un número aleatorio entre 1 y 100
		$numeroAleatorio = rand(1, 38);
		
		echo "Ha salido el <b>$numeroAleatorio</b>";
		echo '<br></br>';

		if ($numeroAleatorio % 2 == 0) {
			$numerocolor="ROJO";
			echo "<b>$numerocolor</b>";
		} else {
			$numerocolor="NEGRO";
			echo "<b>$numerocolor</b>";
		}

		if ($color == $numerocolor) {
			$res="GANADOR";
			echo '<br></br>';
			echo "<b>HAS GANADO!!</b>";
			$sql = "UPDATE tabla_usuarios SET Saldo = Saldo + $apostado where Id_usuario ='$valorid'";
			$resultado = $conexion -> query($sql);

		} else {
			$res="PERDEDOR";
			echo '<br></br>';
			echo "<b>HAS PERDIDO</b>";
			$sql = "UPDATE tabla_usuarios SET Saldo = Saldo - $apostado where Id_usuario ='$valorid'";
			$resultado = $conexion -> query($sql);
		}

		$sql = "INSERT INTO tabla_jugada (Id_usuario, Fecha, Apuesta, Color, Número_Ganador, Color_Ganador, Resultado) VALUES ('$valorid', (CURDATE()),'$apostado','$color', '$numeroAleatorio', '$numerocolor', '$res' )";
		$resultado = $conexion->query($sql);

		echo "<br></br>";
		echo '<a href="menu.php">Volver al menú</a>';
		echo "<br></br>";
		echo '<a href="ruleta.php">Volver a apostar</a>';
    }
}
		?>

	</body>
	<footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <p>Locowin</p>
  </div>
  <!-- Copyright -->
</footer>
</html>