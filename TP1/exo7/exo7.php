
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXO3 tp1</title>
  </head>
  <body>
<?php
require('./exo7_fonction.php');


echo "<h3>Conversion en entier </h3>";
ConvertToInt(10,2,10);
echo "<br/>";
ConvertToInt(23,7,10);
echo "<br/>";
ConvertToInt("FF",16,10);
echo "<br/>";
ConvertToInt(123,10,10);
echo "<br/>";
ConvertToInt("A",11,10);

echo "<br>________________________<br><br>";

echo "<h3> Conversion entier en base </h3>";
ConvertIntToBase(2,10,2);
echo "<br/>";
ConvertIntToBase(17,10,7);
echo "<br/>";
ConvertIntToBase(255,10,16);
echo "<br/>";
ConvertIntToBase(123,10,10);
echo "<br/>";
ConvertIntToBase(10,10,11);

?>
