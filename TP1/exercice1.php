<?php

include ("header.inc.php");

echo " Format jour du mois sur 2 chiffres /mois sur 2 chiffres /année sur 4 chiffres :";
echo date("d-m-Y");
echo "<br>";

echo " Format jour/mois/année :";
echo date("D-M-y");
echo "<br>";

echo " Format jour/mois/année :";
echo date("j-F-L");
echo "<br>";

echo " Format jour/mois/année :";
echo date("l-n-o");
echo "<br>";

echo " Format jour/mois/année :";
echo date("N-W-y");
echo "<br>";

echo " Format jour/mois/année :";
echo date("dS-W-y");
echo "<br>";

echo " Format jour/mois/année :";
echo date("w-W-y");
echo "<br>";

echo " Format jour/mois/année :";
echo date("z-W-y");
echo "<br>";
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("H:i:s");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("H:i:s a");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("H:i:s A");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("B");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("g:i:s");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("G:i:s ");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo date("h:i:s ");
echo "<br>";

echo " Format heure/minutes/secondes :";
date_default_timezone_set("Europe/Paris");
echo DateTime("H:i:s:u");
echo "<br>";
?>

