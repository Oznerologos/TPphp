<?php

    header("Content-type: text/css; charset=iso-8859-1");

    if (isset($_COOKIE["couleur"])) {
      $couleur = $_COOKIE["couleur"];
    };
    if (isset($_COOKIE["taille"])) {
      $taille = $_COOKIE["taille"];
    };

    echo "body{color:".$couleur.";font-size:".$taille.";}";?>