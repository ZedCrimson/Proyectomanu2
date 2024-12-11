<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino Locowin</title>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="estilos.css">
	<link rel="shortcut icon" href="images/icono.png">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Casino Locowin</title>



</head>
<body>
<?php
require 'conexion.php';
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

//se prepara y ejecuta la sentencia
$sql = "SELECT * FROM tabla_usuarios where Correo_electrónico='$email' and contraseña='$contraseña' LIMIT 1";
$resultado = $conexion->query($sql);

//se extrae el registro. no se hace en bucle porque el resultado debe ser unico
$fila = $resultado->fetch_assoc();
if ($fila){
    header("location: menu.php");
}else{
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<h3>Usuario o contraseña incorrectos.</h3>";
    echo "</div>";
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<p><p><a href='Index.php' class='btn btn-primary'>Volver</a></p>";
    echo "</div>";
} 

?>
</body>
</html>