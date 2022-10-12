<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser = "admin";
$ckpass = "1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
  echo "Correcto";
} else {
  echo "Incorrecto";
}

 ?>
