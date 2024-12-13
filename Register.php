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
    <section class="vh-100 bg-image"
  style="background-image: url('https://res.cloudinary.com/mbci/image/upload/f_auto/v1707912731/casinoespanol/casino/rjkw3pqzohnqtazus4u3.png');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create una Cuenta</h2>

              <form id="registro" name="registro" autocomplete="off" method="post" action="register2.php">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" name="nombre" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Nombre</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" name="apellido" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Apellido</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="contraseña" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Contraseña</label>
                </div>

                <div class="form-group">
							    <input type="submit" value="Registrar" class="btn btn-primary">
						    </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



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