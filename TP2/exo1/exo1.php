
<?php
$valeur1 = "";
$valeur2 = "";
$resultat = 0;

  if (isset($_POST['sub'])) {
$valeur1 = $_POST["v1"];
$valeur2 = $_POST["v2"];
$addition = $valeur1 + $valeur2;
$multiplication = $valeur1 * $valeur2;


if($_POST['sub'] == 'Additionner'){
    $resultat = $addition;
}

if($_POST['sub'] == 'Multiplier'){
    $resultat = $multiplication;
}
}
 ?>

<h3>Calculatrice</h3>
<form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
 <p>Valeur 1 :<input type="text" name="v1" value=" <?php echo $valeur1; ?> "/> </p>
 <p>Valeur 2 : <input type="text" name="v2" value=" <?php echo $valeur2; ?> "/></p>
 <p>Résultat : <?php echo $resultat; ?></p>
 <div>
 <p><input type="submit" value="Additionner" name="sub"></p>
 <p><input type="submit" value="Multiplier" name="sub"></p>
</div>
</form>
