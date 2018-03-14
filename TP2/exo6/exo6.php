<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h1>Nombre de visite par heure d'un site web</h1>
<form class="" action='<?php echo $_SERVER["REMOTE_ADDR"]; ?>' method="post">

</form>
  </body>
</html>


<?php

function logVisite(){
$ip = $_SERVER['REMOTE_ADDR'];
$monfichier = fopen("Visite.txt", "a");
  $date =  date("d-m-Y");
  $dates = date("H:i:s");
  $jour = " " . $date ." " . "à" . " " . $dates;
fwrite($monfichier, "
" . $jour . " " . "ip:" .$ip );
fclose($monfichier);
}


function afficherstat(){
    $monfichier = fopen("Visite.txt","a");
    $contenu = file_get_contents("./Visite.txt");
    $visite = explode("\r\n", $contenu);

  for ($temps = 0; $temps < 60; $temps++){
    $compte = 0;
    foreach ($visite as $visiteurs) {
      if ($visiteurs != '') {
        $annexe = explode("à", $visiteurs);
        $annexe1 = explode("ip:", $annexe[1]);
        $info = array($annexe[0], $annexe1[0], $annexe1[1]);
        $info[1] = explode(":", $info[1]);
        if ($info [1][0] == $temps) {
          $compte++;
        }
      }
    }
    if ($compte > 0) {
      echo "De ".$temps." heure à ".($temps+1)."heure, Le site a eu " . $compte. " visiteurs. <br>";
    }
  }
}

 logVisite();
afficherstat();
    ?>
