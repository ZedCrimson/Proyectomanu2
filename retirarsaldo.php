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
              <a class="nav-link" href="Ruleta.php">Ruleta</a>
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
session_start(); // Iniciar la sesión

// Verificar si la variable de sesión existe
if (isset($_SESSION['id_usuario'])) {
    // Recuperar el valor de la variable de sesión
    $idusu = $_SESSION['id_usuario'];
}

if (isset($_SESSION['nombre_usu'])) {
  // Recuperar el valor de la variable de sesión
  $nombreusu = $_SESSION['nombre_usu'];
 
}

if (isset($_SESSION['apellido_usu'])) {
  // Recuperar el valor de la variable de sesión
  $apellidousu = $_SESSION['apellido_usu'];
  
}
$saldousu= "SELECT Saldo from tabla_usuarios where Id_usuario ='$idusu'";
$saldousuario = $conexion->query($saldousu);
if ($saldousuario->num_rows > 0) {
    // Obtener el valor
    $fila = $saldousuario->fetch_assoc();
    $valorsaldo = $fila['Saldo']; // Almacena el resultado en una variable
}




echo "Bienvenido a Locowin: <b>$nombreusu $apellidousu</b>";
echo "<br></br>";
echo "Tu saldo es de: <b>$valorsaldo €</b>";
?>


	<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/menu.css">
        <link rel="shortcut icon" href="Recursos/icono.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casino Locowin</title>


		
	</head>
	<body>
  <?php
    ?>
        <form class="form" method="POST" action="retirarsaldo2.php">

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Verifica tu cuenta y introduce el saldo a retirar</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">Saldo a retirar</label>
                    <input type="number" name="saldo" class="form-control form-control-lg" />
                  </div>
                  <input type="hidden" name="user_id" value="<?php echo $idusu; ?>" class="form-control form-control-lg" />
                  <button type="submit" class="button">Retirar Saldo</button>

                </form>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>			