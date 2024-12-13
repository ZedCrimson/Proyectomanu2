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
    <audio autoplay>
        <source src="Recursos/Ruleta song.mp3" type="audio/mpeg">
    </audio>

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
          <a class="nav-link" href="historial.php">Ver Historial</a>
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

if (isset($_SESSION['saldo_usu'])) {
  $saldousu = $_SESSION['saldo_usu'];
  
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
?>




<form class="form" method="POST" action="ruleta2.php">

<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Introduce el color y el dinero que quieras apostar</h5>

<div data-mdb-input-init class="form-outline mb-4">
<label class="form-label" for="form2Example27">Color a elegir. (Escribe ROJO o NEGRO)</label>
  <input type="text" name="color" class="form-control form-control-lg" />
  
</div>

<div data-mdb-input-init class="form-outline mb-4">
<label class="form-label" for="form2Example27">Dinero a apostar.</label>
  <input type="number" name="apostado" class="form-control form-control-lg" />
  <input type="hidden" name="user_id" value="<?php echo $idusu; ?>" class="form-control form-control-lg" />
</div>

<button type="submit" class="button">¡A JUGAR!</button>

</form>

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
