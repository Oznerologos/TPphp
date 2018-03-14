<form method="POST" enctype="multipart/form-data">
    <input type="file" name="img"><br><br>
    <input type="submit" value="Afficher l'image">
</form>

<?php

if (isset($_FILES['img'])) {
    $infosfichier = pathinfo($_FILES['img']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'png', 'jpeg');
    if (in_array($extension_upload, $extensions_autorisees)) {
        $fichier1 = $_FILES['img']['tmp_name'];
        $fichier2 = "gallery/img_" . $_FILES['img']['name'];
        $resultat = move_uploaded_file($fichier1, $fichier2);
    }
}

function createGallery(){
  $dir = 'gallery';
  $ListeImg = array_slice(scandir($dir), 2);

  for($i = 0; $i < count($ListeImg); $i++){
      echo "<br><form action='".$_SERVER['PHP_SELF']."' method='post'><img src='gallery/$ListeImg[$i]' alt='photo de la galerie'><br/>
      <input hidden name='NomImg' value='gallery\/$ListeImg[$i]'>
      <input type='submit' name='SupImg' value='Supprimer'></form><br>";
  }
}

createGallery();
function removePicture($NomImg){
  unlink($NomImg);
}

if (isset($_POST['SupImg']) && $_POST['SupImg'] == 'Supprimer'){
  removePicture($_POST['NomImg']);
  echo '<meta http-equiv="refresh" content="0" />';
}

?>
