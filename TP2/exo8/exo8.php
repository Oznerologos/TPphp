<?php


if ($dir = opendir("../exo6")) { //A quoi sert le . !

  echo "Chemin: ".getcwd()."<br>\n";
  while($file = readdir($dir)) {
    echo "$file<br>\n";
  }
  closedir($dir);
}
 ?>
