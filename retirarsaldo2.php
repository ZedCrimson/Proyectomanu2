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

			 
			 $saldo= $_POST['saldo'];
			 $valorid= $_POST['user_id'];

			 $valor_a_insertar = $simbolo . $saldo;

			 $sql = "UPDATE tabla_usuarios SET Saldo = Saldo - $saldo WHERE Id_usuario = '$valorid'";
			 $resultado = $conexion -> query($sql);
	 
			 if($resultado > 0 ){
				$sql2 = "INSERT INTO tabla_operación (Id_usuario, Fecha, Acción, Cantidad) VALUES ('$valorid',(CURDATE()), 'RETIRAR', '$saldo')";
				$resultado2 = $conexion -> query($sql2);
				header("location: menu.php");
			 }else{
				 echo "<p class='alert alert-danger'>Ha habido un error</p>";
			 }
			 echo "<p><a class='btn btn-primary' href='index.php'>Regresar</a></p>";
		 
			
		?>

	</body>
</html>