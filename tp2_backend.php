<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carolina Torino</title>
  </head>
  <body>
<h1>ejercicio1</h1>
<?php
$a = 5;
if ($a>0) {
echo "a es un número positivo";
}
 ?>
<h1>ejercicio2</h1>
 <?php
 $a = 5;
 if ( $a > 1 || $a < 10 ) {
 echo "a es un número entre el 1 y el 10";
 }
  ?>
<h1>ejercicio3</h1>
<?php
$a = 13;
if ( $a > 10 ) {
echo "a es un número mayor a 10";
} else {
echo "a es un número menor a 2";
}
 ?>
<h1>ejercicio4</h1>
<?php
$numero1 = 18;
$numero2 = 14;
if ( $numero1 > $numero2 ) {
echo "suma";
echo $numero1 + $numero2;
echo "resta";
echo $numero1 - $numero2;
} elseif ($numero1 < $numero2 ) {
echo "multiplicación";
echo $numero1 * $numero2 ;
echo "división";
echo $numero1 / $numero2;
echo "resto";
echo $numero1 % $numero2;
}  else {
echo "son iguales";
}
 ?>


  </body>
</html>
