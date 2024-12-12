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

			 
			 $saldo= $_POST['saldo'];
			 $valorid= $_POST['user_id'];
	
			 //se prepara la sentencia sql
			 $sql = "UPDATE tabla_usuarios SET Saldo = Saldo + $saldo WHERE Id_usuario = '$valorid'";
			 //se ejecuta la sentencia y se gurada el resultado en resultado
			 $resultado = $conexion -> query($sql);
	 
			 if($resultado > 0 ){
				header("location: menu.php?valorid=$valorid");
			 }else{
				 echo "<p class='alert alert-danger'>Ha habido un error</p>";
			 }
			 echo "<p><a class='btn btn-primary' href='index.php'>Regresar</a></p>";
		 
			
		?>

	</body>
</html>