<?php
include 'inc/header.inc.php';
$mysqli = new Mysqli("localhost", "root", "", "bibliotheque");
?>


<form method="post">
    <label for="id_livre">ID livre : </label><br><input id="id_livre" type="number" name="id_livre"> <br><br>
    <label for="id_abonne">ID abonne : </label><br><input id="id_abonne" type="number" name="id_abonne"> <br><br>
    <label for="date_sortie">Date de sortie : </label><br><input id="date_sortie" type="text" name="date_sortie" placeholder="aaaa-mm-jj" > <br><br>
    <label for="date_rendu">Date de rendu : </label><br><input id="date_rendu" type="text" name="date_rendu" placeholder="aaaa-mm-jj"> <br><br>
    <input type="submit" value="ajouter">
</form>


<?php
if ($_POST) {
  $result = $mysqli->query("INSERT INTO emprunt (id_livre, date_sortie, date_rendu, id_abonne) VALUES ('$_POST[id_livre]', '$_POST[date_sortie]', '$_POST[date_rendu]', '$_POST[id_abonne]' )") ;
  echo "gg mec";
}

 ?>

<?php include 'inc/footer.inc.php'; ?>
