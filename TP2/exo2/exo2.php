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
 printSuite($_POST) ;
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>

  <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <h1>EXERCICE 7 du TP1</h1>
   <p>Hauteur : <?php echo $resultat; ?></p>
   <div>
   <p><input type="submit" value="Afficher" name="sub"></p>
  </div>
  </form>

</body>
</html>
