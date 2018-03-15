

<?php
//echo "<h1>Exercice 3</h1>";
function analyser($strA, $strB){
  $strAExplo = explode(" ",$strA);
  $strAImplo = implode("", $strAExplo);
  $strAExplo2 = explode(",",$strAImplo);
  $strBExplo = explode(" ",$strB);
  $strBImplo = implode("", $strBExplo);
  $strBExplo2 = explode(",",$strBImplo);
  $cle = array();
  $val = array();
  sort($strAExplo2);
  for ($i=0; $i < sizeof($strAExplo2) ; $i++) {
    $strAExplo3 = explode("->", $strAExplo2[$i]);
    array_push($cle,$strAExplo3[0]);
    array_push($val,$strAExplo3[1]);
  }
  for ($b=0; $b < sizeof($strBExplo2) ; $b++) {
    $srch = array_search($strBExplo2[$b], $cle);
    echo "L'indice ".$strBExplo2[$b]." possede la valeur : ".$val[$srch]."</br>";
  }

};
//analyser("a->b,z->x,e->y, c->d,f->g", "a, f");
 ?>
