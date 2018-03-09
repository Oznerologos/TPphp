
<h3>Calculatrice</h3>
<form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
 <p>Valeur 1 : <input type="text" name="v1" /></p>
 <p>Valeur 2 : <input type="text" name="v2" /></p>
 <p>Résultat : <?php  ?></p>
 <div>
 <p><input type="submit" value="Additionner" name="sub"></p>
 <p><input type="submit" value="Multiplier" name="sub"></p>
</div>
</form>

<?php
// Il faut utiliser if et isset.

$valeur1 = $_POST["v1"];
$valeur2 = $_POST["v2"];
$addition = $valeur1 + $valeur2;
$multiplication = $valeur1 * $valeur2;

if (isset($_POST["sub"])) {
    $resultat = $addition;
    echo "$resultat";
}
if (isset($_POST["sub"])) {
    $resultat = $multiplication;
    echo "$resultat";
}

 ?>
