<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EXO3 tp1</title>
  </head>
  <body>
<?php
require('./exo3_fonction.php');

$regle = "a->b, c->d, f->g";
$valeurs = "a,f";

echo Analyser($regle, $valeurs);
 ?>
  </body>
</html>
