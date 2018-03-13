<?php
$nb = 1;
echo "<div align=\"center\">";
while ($nb <> 8){ // Soit 8 le nombre de chiffres à la base de la pyramide
  $nb2 = $nb;
  while ($nb2 <> 0){
    echo "1";
    $nb2 = $nb2-1;
  }
  $nb = $nb+1;
  echo "<br>";
}
echo "</div>";
?>
