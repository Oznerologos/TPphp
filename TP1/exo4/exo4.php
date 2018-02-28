<?php

$p1 = array("prenom"=>"Victor", "nom"=>"Hugo", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$p2 = array("prenom"=>"Jean", "nom"=>"de La Fontaine", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$p3 = array("prenom"=>"Pierre", "nom"=>"Corneille", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$p4 = array("prenom"=>"Jean", "nom"=>"Racine", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
$informations = array($p1, $p2, $p3, $p4);

function genererGalerie($informations){
    usort($informations, 'alphabetique');
  echo "<table>"."<tr><th>Prénom</th><th>Nom</th><th>Photo</th></tr>";
  foreach ($informations as $key => $value) {
    echo "<tr><td>".$value['prenom']."</td>";
    echo "<td>".$value['nom']."</td>";
    echo "<td><img src='".$value['photo']."'></td></tr>";
    }
  echo "</table>";
}


echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Galerie</title><link rel='stylesheet' href='exo2.css'></head><body>";
genererGalerie($informations);


function alphabetique($a,$b){
    if ($a['nom'] == $b['nom']) {
        return strcasecmp($a['prenom'], $b['prenom']);
    } else {
        return strcasecmp($a['nom'], $b['nom']);
    }

}


echo "</body></html>";
 ?>




<link rel="stylesheet" href="/css/master.css">
