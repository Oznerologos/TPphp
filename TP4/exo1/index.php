<?php
include 'inc/header.inc.php';
$mysqli = new Mysqli("localhost", "root", "", "bibliotheque");
?>

<form method="post">
  <label for="prenom">Prenom : </label> <input type="text" name="prenom" placeholder="Ex : Johnson" id="prenom">
  <input type="submit" value="Ajouter">
</form>

<?php
if ($_POST) {
  if ($_POST['prenom'] !="") {
    $result = $mysqli->query("INSERT INTO abonne (prenom) VALUES ('$_POST[prenom]')") ;
    echo "gg mec tu as ajouté ".$_POST['prenom'];
  }
  else echo "Veuillez saisir un nom !";
}
 ?>

<?php include 'inc/footer.inc.php'; ?>
