

<?php
$couleur = "black";
$taille = "30px";
if (isset($_POST['color']) AND isset($_POST['size'])) {
  $couleur = $_POST['color'];
  setcookie("couleur", $couleur);
  $taille = $_POST['size'];
  setcookie("taille", $taille);
} else if (isset($_COOKIE['couleur']) AND isset($_COOKIE['taille'])) {
  $couleur = $_COOKIE['couleur'];
  $taille = $_COOKIE['taille'];
};

function createCSS(){
  if (!file_exists("exo4_css.php")) {
    $open = fopen("exo4_css.php", "w");
    fwrite($open,
    '<?php

    header("Content-type: text/css; charset=iso-8859-1");

    if (isset($_COOKIE["couleur"])) {
      $couleur = $_COOKIE["couleur"];
    };
    if (isset($_COOKIE["taille"])) {
      $taille = $_COOKIE["taille"];
    };

    echo "body{color:".$couleur.";font-size:".$taille.";}";

    ?>'
    );
  }
};


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 4</title>
  </head>
  <body>
    <span> Bonjour, vous pouvez ici choisir vos preferences, selectionnez une couleur et une taille de police</span> <br><br>
    <form method="post">
      <select name="color">
        <option value="red">Rouge</option>
        <option value="blue">Bleu</option>
        <option value="black">Noir</option>
      </select>

      <select name="size">
        <option value="15px">Petite</option>
        <option value="30px">Moyene</option>
        <option value="60px">Grande</option>
      </select><br><br>
      <input type="submit" name="change" value="Changer">
    </form><br>
    <a href="test.php">Testez ici !!</a>

<?php createCSS() ?>

  </body>
</html>
