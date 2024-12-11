<?php
$conx = mysqli_connect("localhost","root","","ProyectoManu");

if (!$conx) {
  echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  exit();
}
?>


