<?php  ?>

<form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
  <h1>EXERCICE 3 du TP1</h1>
 <p>Règles :<input type="text" name="v1" value=" <?php echo $valeur1; ?> "/> </p>
 <p>Clés : <input type="text" name="v2" value=" <?php echo $valeur2; ?> "/></p>
 <p>Résultat : <?php echo $resultat; ?></p>
 <div>
 <p><input type="submit" value="Calculer" name="sub"></p>
</div>
</form>
<!-- ______________________________________________________________-->

<form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
  <h1>EXERCICE 7 du TP1</h1>
 <p>Nombre à convertir :<input type="text" name="v1" value=" <?php echo $valeur1; ?> "/> </p>
 <p>De la base : <input type="text" name="v2" value=" <?php echo $valeur2; ?> "/></p>
 <p>Vers la base : <input type="text" name="v2" value=" <?php echo $valeur2; ?> "/></p>
 <p>Résultat : <?php echo $resultat; ?></p>
 <div>
 <p><input type="submit" value="Calculer" name="sub"></p>
</div>
</form>

<!-- ______________________________________________________________-->

<form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
  <h1>EXERCICE 8 du TP1</h1>
 <p>Hauteur : <?php echo $resultat; ?></p>
 <div>
 <p><input type="submit" value="Afficher" name="sub"></p>
</div>
</form>
