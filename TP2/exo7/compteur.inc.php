<!DOCTYPE html>
<html>
<head>
    <title>Compteur</title>
    <meta charset="utf-8" />
</head>
<body>
  <?php

   ?>
</body>
</html>
<?php

// $ressource = fopen('compteur.txt','r+');
// $nbVues = fgets($ressource);
// if($nbVues==""){
    // $nbVues=0;
// }
// $nbVues++;
// fseek($ressource,0);
// fputs($ressource,$nbVues);

// fclose($ressource);

// echo 'Cette page a été consulté : '.$nbVues.' fois';
 ?>


<?php

function lireNombre($nomFichier){
  $fichier = fopen($nomFichier,'r+');
  $nbVues = fgets($fichier);
  if($nbVues==""){
      $nbVues=0;
      return $nbVues;
    }
  else {
    return $nbVues;
  }
  fclose($fichier);
}

function ecrireNombre($nomFichier,$nombre){
  $fichier = fopen($nomFichier,'r+');
  fwrite($fichier, $nombre);
  fclose($fichier);
}

function compterVisites(){
    $fichier = fopen('compteur.txt','r+');
    $nbVues = fgets($fichier);
if($nbVues==""){
    $nbVues=0;
}
$nbVues++;
    fseek($fichier,0);
    fputs($fichier,$nbVues);
    fclose($fichier);
}
function afficherVisites(){
  $contenu = lireNombre('compteur.txt');
  echo 'Cette page a été consulté : '.$contenu.' fois';

}

afficherVisites();
   ?>
