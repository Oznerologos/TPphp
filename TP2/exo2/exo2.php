
<div>
  <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <h1>EXERCICE 3 du TP1</h1>
    <label> Règles:</label>
    <input type="textArea" name="regle"
    <?php
    if (isset($_REQUEST["regle"])){
      echo "value='".$_REQUEST["regle"]."'";
    }
    ?>
    >
    <br>
    <label>Clés:</label>
    <input type="textArea" name="clés"
    <?php
    if (isset($_REQUEST["clés"])){
      echo "value='".$_REQUEST["clés"]."'";
    }

  ?>
  >
    <br>
    <label>Résultat:</label>
    <?php
require("../../tp1/exo3/exo3_fonction.php");
if(isset($_REQUEST["Analyser"])){
  analyser($_REQUEST["regle"], $_REQUEST["clés"]);
}
     ?>
  <br><br>
  <input type="submit" value="Analyser" name="Analyser">
  </form>
</div>

<!--_______________Exercice 7 du tp1________________________________________________________________________-->

<div class="">
  <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <h1>EXERCICE 7 du TP1</h1>
    <label> Nombre à convertir:</label>
    <input type="textArea" name="nombre"
    <?php
    if (isset($_REQUEST["nombre"])){
      echo "value='".$_REQUEST["nombre"]."'";
    }
    ?>
    >
    <br>
    <label>De la base:</label>
    <input type="number" name="debase"
    <?php
    if (isset($_REQUEST["debase"])){
      echo "value='".$_REQUEST["debase"]."'";
    }
  ?>
  >
  <br>
  <label>A la base:</label>
  <input type="number" name="abase"
  <?php
  if (isset($_REQUEST["abase"])){
    echo "value='".$_REQUEST["abase"]."'";
  }
?>
>
    <br>
    <label>Résultat:</label>
    <?php
  require("../../tp1/exo7/exo7_fonction.php");
  if(isset($_REQUEST["Appliquer"])){
  ChangerBase($_REQUEST["nombre"], $_REQUEST["debase"], $_REQUEST["abase"]);
  }
     ?>
  <br><br>
  <input type="submit" value="Appliquer" name="Appliquer">
  </form>
</div>
<!--________________exo 8 du tp1______________-->
<div class="">
  <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <h1>EXERCICE 8 du TP1</h1>
    <label> Hauteur:</label>
    <input type="number" name="Hauteur"
    <?php
    if (isset($_REQUEST["haut"])){
      echo "value='".$_REQUEST["haut"]."'";
    }
    ?>
    >
    <br><br>
    <label>Résultat:</label>
    <?php
  require("../../tp1/exo8/exo8_function.php");
  if(isset($_REQUEST["Afficher"])){
  printSuite($_REQUEST["Hauteur"]);
  }
     ?>
  <br><br>
  <input type="submit" value="Afficher" name="Afficher">
  </form>
</div>
</body>
</html>
