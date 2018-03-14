<form method="POST" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" value="Afficher">
</form>

<?php
if (isset($_FILES['img'])) {
    $infosfichier = pathinfo($_FILES['img']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'png', 'jpeg');
    if (in_array($extension_upload, $extensions_autorisees)) {
        $file1 = $_FILES['img']['tmp_name'];
        $file2 = "gal/image_" . $_FILES['img']['name'];
        $result = move_uploaded_file($file1, $file2);
    }
}
    function createGallery(){
  $dir = 'gal';
  $files1 = array_slice(scandir($dir), 2);

  for($i = 0; $i < count($files1); $i++){
      echo "<br><form action='".$_SERVER['PHP_SELF']."' method='post'><img src='gal/$files1[$i]' alt='photo de la galerie' class='imgExo2'><br/>
      <input hidden name='pictureName' value='gal\/$files1[$i]'>
      <input type='submit' name='gallerySubmit' value='Supprimer'></form><br>";
  }
  }
  createGallery();
  function removePicture($filename){
    unlink($filename);
}

if (isset($_POST['gallerySubmit']) && $_POST['gallerySubmit'] == 'Supprimer'){
    removePicture($_POST['pictureName']);
    echo '<meta http-equiv="refresh" content="0" />';
}
?>
