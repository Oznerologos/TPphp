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
  fclose($fichier);
}
}

function ecrireNombre($nomFichier,$nombre){
  $fichier = fopen($nomFichier,'r+');
  fwrite($fichier, $nombre);
  fclose($fichier);
}

function compterVisites(){
    $fichier = fopen('fichier.txt','r+');
    $nbVues = fgets($ressource);
if($nbVues==""){
    $nbVues=0;
}
$nbVues++;
    fseek($ressource,0);
    fputs($ressource,$nbVues);
    fclose($fichier);
}
function afficherVisites(){
lireNombre('fichier.txt');
  echo 'Cette page a été consulté : '.$nbVues.' fois';
}


   ?>