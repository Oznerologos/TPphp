
<form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
      <label for="icone">Fichier au format JPG :</label><br><br>
      <input type="file" name="icone" id="icone" /><br><br><br>
      <label for="titre">Titre du fichier:</label>
      <input type="text" name="titre" value="Titre du fichier" id="titre" /><br><br>
      <input type="submit" name="submit" value="Envoyer" />

</form>
