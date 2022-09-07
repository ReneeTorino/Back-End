<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carolina Torino</title>
  </head>
  <body>
    <h1>Comenzamos a programar</h1>

<h2>Uno</h2>
<?php
echo "Hola Mundo";
 ?>
<br><hr>

<h2>Dos</h2>
<?php
$titulo = "Hola Mundo";
echo $titulo;
 ?>
<br><hr>

<h2>Tres</h2>
<?php
$a = 64;
$b = 32;
$espacio = " ";
echo $a + $b;
echo $espacio;
echo $a - $b;
echo $espacio;
echo $a * $b;
echo $espacio;
echo $a / $b;
echo $espacio;
echo $a % $b;
 ?>
<br><hr>

<h2>Cuatro</h2>
<?php
$celsius = 20;
$fahrenheit = ($celsius * 9/5) + 32;
echo $fahrenheit;
 ?>
 <br><hr>

"/Cinco a/"
 <?php
 $base = 18;
 $altura = 12;
 $area = $base * $altura;
 $perimetro = 2 * ($base + $altura);
 $espacio = " ";
 echo $area;
 echo $espacio;
 echo $perimetro;
  ?>

"/Cinco b/"
 <?php
 $radio = 30;
 $diametro = $radio * 2;
 $area = 3.14159265359 * ($radio**2);
 $perimetro = $diametro * 3.14159265359;
 $espacio = " ";
 echo $area;
 echo $espacio;
 echo $perimetro;
  ?>


  </body>
</html>
