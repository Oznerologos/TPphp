<?php
  $nom = '';
  $fichier = './file.txt';
  $ressource = fopen('compteur.txt','r+');
  $NombreClics = fgets($ressource);
  $ListeNom = fopen('log.txt', 'a');

  if (!empty($_POST['download']) && isset($_POST['download'])) {
    if (!empty($_POST['nom']) && isset($_POST['nom'])) {
      $nom = $_POST['nom'];
      $NombreClics++;
      fseek($ressource,0);
      fputs($ressource,$NombreClics);
      fclose($ressource);
      fwrite($ListeNom, $nom.PHP_EOL);
      fclose($ListeNom);
      if (file_exists($fichier)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($fichier).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fichier));
        readfile($fichier);
        exit;
      }
    }
    else {echo "Veuillez saisir un nom";}
  }

?>

<form  method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"  placeholder="Nom">
    <input type="submit" value="Télécharger" name="download">
</form>


<?php echo "Ce fichier a ete telecharge : ".$NombreClics." (Veuillez rafraichir la page pour que le compteur se mette a jour)"; ?>
