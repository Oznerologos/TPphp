<?php
 //$dir_nom = '../';
//$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas');
//$fichier= array();
//$dossier= array();
//while($element = readdir($dir))
//{
//  if($element != '.' && $element != '..')
  //{
    //if (!is_dir($dir_nom.'/'.$element))
    //{
      //$fichier[] = $element;
    //}
  //  else
    //{
      //$dossier[] = $element;
    //}
//  }
//}
//closedir($dir);
//if(!empty($dossier))
//{
  //sort($dossier);
  //echo "\t\t<ul>\n";
  //foreach($dossier as $lien)
   //{
    // echo "\t\t\t<li><a href=\"$dir_nom/$lien \">$lien</a></li>\n";
   //} echo "\t\t</ul>";
 //}
   //if(!empty($fichier))
   //{ sort($fichier);
    // echo "\t\t<ul>\n";
     //foreach($fichier as $lien)
     //{
       //echo "\t\t\t<li><a href=\"$dir_nom/$lien \">$lien</a></li>\n";
     //}
     //echo "\t\t</ul>";
   //}
    ?>
<?php

function Arborescence($dir){

$arbo = $dir;
$adir = scandir($dir);
foreach ($adir as $fichier) {
  if(!in_array($fichier,array(".",".."))){
    if (is_dir($arbo."/".$fichier)){
      echo "<li>" .$fichier. "<li><ul>";
      Arborescence($arbo."/".$fichier);
      echo"</ul>";
    }
    else{
      echo "<li>" .basename($fichier);
    }
  }
}
}
Arborescence('./../../../TPphp');

 ?>
