
<!doctype html>
<html lang="es">
    
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
          <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Juegos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Ruleta.php">Ruleta</a></li>
            <li><a class="dropdown-item" href="Blackjack.php">Apuesta Deportiva</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Proximamente...</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Index.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/menu.css">
        <link rel="shortcut icon" href="Recursos/icono.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casino Locowin</title>


		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form id="registro" name="registro" autocomplete="off" action="modificar2.php" method="Post">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $fila['ID'];?>"> 
						</div>
					</form>
				</div>
			</div>
		</div>
		
        <form class="form" method="POST" action="añadirsaldo2.php">

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Verifica tu cuenta y introduce el saldo a elegir</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg" />
                    
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control form-control-lg" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">Saldo a añadir</label>
                    <input type="number" name="saldo" class="form-control form-control-lg" />
                    
                  </div>

                  <button type="submit" class="button">Añadir Saldo</button>

                </form>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				