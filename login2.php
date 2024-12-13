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

$id = "SELECT Id_usuario from tabla_usuarios where Correo_Electrónico = '$email' and contraseña = '$contraseña'";
$resultadoid = $conexion->query($id);
if ($resultadoid->num_rows > 0) {
    $fila = $resultadoid->fetch_assoc();
    $valorid = $fila['Id_usuario'];
}

$nombreusu= "SELECT Nombre from tabla_usuarios where Correo_Electrónico = '$email' and contraseña = '$contraseña'";
$nombreusuario = $conexion->query($nombreusu);
if ($nombreusuario->num_rows > 0) {
    $fila = $nombreusuario->fetch_assoc();
    $valornombre = $fila['Nombre'];
}

$apellidousu= "SELECT Apellido from tabla_usuarios where Correo_Electrónico = '$email' and contraseña = '$contraseña'";
$apellidousuario = $conexion->query($apellidousu);
if ($apellidousuario->num_rows > 0) {
    $fila = $apellidousuario->fetch_assoc();
    $valorapellido = $fila['Apellido'];
}

session_start();


$_SESSION['id_usuario'] = $valorid;
$_SESSION['nombre_usu'] = $valornombre;
$_SESSION['apellido_usu'] = $valorapellido;


$sql = "SELECT * FROM tabla_usuarios where Correo_electrónico='$email' and contraseña='$contraseña' LIMIT 1";
$resultado = $conexion->query($sql);

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