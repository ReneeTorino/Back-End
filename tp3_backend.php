<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carolina Torino</title>
  </head>
  <body>

  <?php
 print "<p>Ejercicio 1</p>\n";
 for ($i=1;$i<101;$i++){
   print "<p>$i</p>\n";
 }

 print "<p>Ejercicio 2</p>\n";
 for ($i=100;$i>0;$i--){
   print "<p>$i</p>\n";
 }

 print "<p>Ejercicio 3</p>\n";
 for ($i=2;$i<101;$i=$i+2){
   print "<p>$i</p>\n";
 }

 print "<p>Ejercicio 4</p>\n";
 for ($i=1;$i<100;$i=$i+2){
   print "<p>$i</p>\n";
 }

 print "<p>Ejercicio 5</p>\n";
 $suma=0;
 for ($i=1;$i<21;$i++){
   $suma= $suma +$i;
 }
 print $suma;

 print "<p>Ejercicio 5</p>\n";
 $suma=0;
 for ($i=2;$i<21;$i=$i+2){
   $suma= $suma +$i;
 }
 print $suma;

   ?>

  </body>
</html>
