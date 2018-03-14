


<form  enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
      <label for="icone">Fichier au format JPG :</label><br><br>
      <input type="file" name="icone" id="icone" /><br><br>
      <input type="submit" name="submit" value="Poster" />

</form>

<?php

 if (isset($_FILES['icone'])) {
 $infosfichier = pathinfo($_FILES['icone']['name']);
 $ext_upload = $infosfichier['extension'];
 $ext_ok = array('jpg','JPG','jpeg','JPEG');
 if (in_array($ext_upload, $ext_ok)) {
     $nom = $_FILES['icone']['tmp_name'];
     $newname = "fichier_" . $_FILES['icone']['name'];
     $resultat = move_uploaded_file($nom, $newname);
     echo "<img src=\"". $newname ."\">" . "<br>";
 }
 else{ echo "Le fichier choisi ne correspond pas au format jpg, format image. Veuillez choisir un fichier jpg.";}
 }
?>
