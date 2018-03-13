<?php
include 'inc/header.inc.php';
$mysqli = new Mysqli("localhost", "root", "", "bibliotheque");
?>

<form method="post">
  <label for="titre">Titre :<br> </label> <input type="text" name="titre" placeholder="Ex : Harry Potter" id="titre"><br><br>
  <label for="auteur">Auteur : <br></label> <input type="text" name="auteur" placeholder="Ex : J.K.Rowling" id="auteur"><br><br>
  <input type="submit" value="Ajouter">
</form>

<?php
if ($_POST) {
  if ($_POST['titre'] !="" AND $_POST['auteur'] != "") {
    $result = $mysqli->query("INSERT INTO livre (auteur, titre) VALUES ('$_POST[auteur]', '$_POST[titre]')") ;
    echo "gg mec tu as ajouté le livre ". $_POST['titre']. " écrit par ". $_POST['auteur'];
  }
  else echo "Veuillez saisir un titre et un auteur !";
}
 ?>

<?php include 'inc/footer.inc.php'; ?>
