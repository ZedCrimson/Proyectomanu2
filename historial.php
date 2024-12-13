<!DOCTYPE html>
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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOCOWIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="menu.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Juegos
          </a>
          <ul class="dropdown-menu">
              <a class="nav-link" href="ruleta.php">Ruleta</a>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Proximamente...</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="añadirsaldo.php">Añadir Saldo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="retirarsaldo.php">Retirar Saldo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Index.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
require 'conexion.php';
session_start();

if (isset($_SESSION['id_usuario'])) {
    $idusu = $_SESSION['id_usuario'];
}

if (isset($_SESSION['nombre_usu'])) {
  $nombreusu = $_SESSION['nombre_usu'];
 
}

if (isset($_SESSION['apellido_usu'])) {
  $apellidousu = $_SESSION['apellido_usu'];
  
}

$saldousu= "SELECT Saldo from tabla_usuarios where Id_usuario ='$idusu'";
$saldousuario = $conexion->query($saldousu);
if ($saldousuario->num_rows > 0) {
    $fila = $saldousuario->fetch_assoc();
    $valorsaldo = $fila['Saldo'];
}




echo "Bienvenido a Locowin: <b>$nombreusu $apellidousu</b>";
echo "<br></br>";
echo "Tu saldo es de: <b>$valorsaldo €</b>";
echo "<br></br>";
echo "<br></br>";

// Consulta para seleccionar todos los datos de una tabla
$sql = "SELECT * FROM tabla_jugada where Id_usuario='$idusu'";
$tabla = $conexion->query($sql);

// Comprobar si hay resultados
if ($tabla->num_rows > 0) {
    // Crear una tabla HTML
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background-color: #f2f2f2;'><th>Id_usuario</th><th>Fecha</th><th>Apuesta</th><th>Color</th><th>Número_Ganador</th><th>Color_Ganador</th><th>Resultado</th></tr>"; // Encabezados de la tabla

    // Salida de cada fila de la tabla
    while($row = $tabla->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Id_usuario"] . "</td>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Fecha"] . "</td>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Apuesta"] . "</td>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Color"] . "</td>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Número_Ganador"] . "</td>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Color_Ganador"] . "</td>";
        echo "<td style='border: 1px solidrgb(0, 0, 0); padding: 8px;'>" . $row["Resultado"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
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