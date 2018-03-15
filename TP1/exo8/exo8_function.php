<?php
$nb = 1;
echo "<div align=\"center\">";
function printSuite($i){
  $nombre = 1;
  $string = "1";

  while ($nombre <= $i) {
    echo $string . "<br>";
    $string = nextSuite($string);
    $nombre++;

  }
}

function nextSuite($str){
  $string = "";
  $i = 0;
  $nombre = 0;
  $chiffre = intval($str[$i]);
  while ($i < strlen($str)) {
    while (intval($str[$i]) == $chiffre) {
      $nombre++;
      $i++;
      if($i >= strlen($str))
      break;
    }
    $string =$string.strval($nombre).strval($chiffre);
    $nombre = 0;
    if($i < strlen($str))
      $chiffre = intval($str[$i]);
  }
  return $string;
}

?>
