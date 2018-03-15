
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
require("../../tp1/exo3/exo3.php");
if(isset($_REQUEST["Analyser"])){
  analyser($_REQUEST["regle"], $_REQUEST["clés"]);
}
     ?>
  <br><br>
  <input type="submit" value="Analyser" name="Analyser">
  </form>
</div>

<!--____________________________________________________________________________________________________________________-->

<div class="">
  <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <h1>EXERCICE 7 du TP1</h1>
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
  require("../../tp1/exo3/exo3_fontion.php");
  if(isset($_REQUEST["Analyser"])){
  analyser($_REQUEST["regle"], $_REQUEST["clés"]);
  }
     ?>
  <br><br>
  <input type="submit" value="Analyser" name="Analyser">
  </form>
</div>

<div class="">
  <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <h1>EXERCICE 8 du TP1</h1>
    <label> Hauteur:</label>
    <input type="textArea" name="Hauteur"
    <?php
    if (isset($_REQUEST["regle"])){
      echo "value='".$_REQUEST["regle"]."'";
    }
    ?>
    >
    <br>

  ?>
  >
    <br>
    <label>Résultat:</label>
    <?php
  require("../../tp1/exo3/exo3.php");
  if(isset($_REQUEST["Analyser"])){
  analyser($_REQUEST["regle"], $_REQUEST["clés"]);
  }
     ?>
  <br><br>
  <input type="submit" value="Analyser" name="Analyser">
  </form>
</div>
</body>
</html>
