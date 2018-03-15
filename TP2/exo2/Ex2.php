<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Annexes/annexe.css">
    <title>Exercice 2 TP2</title>
</head>

<body>
<?php require("../../tp1/exo3/exo8.php"); ?>
<?php require("../../tp1/exo3/exo7.php"); ?>

    

<div>
    <h1 class="div">Exercice 7 du TP1</h1>
</div>

<div class="div">
    <form name="formulaire" method="post" action="Ex2.php">
        <label>Nombre à convertir : <input name="nombres" type="text" value="<?php if (isset($_POST['nombres'])) echo ($_POST['nombres']); ?>"></label><br><br>
        <label>De la base : <input name="from" type="text" value="<?php if (isset($_POST['from'])) echo ($_POST['from']); ?>"></label><br><br>
        <label>Vers la base : <input name="to" type="text" value="<?php if (isset($_POST['to'])) echo ($_POST['to']); ?>"></label>
        <p>Résultat :

            <?php

            if(isset($_POST['nombres']) && isset($_POST['op2']) && isset($_POST['from']) && isset($_POST['to'])) {
                $nombres = htmlspecialchars($_POST['nombres']);
                $op2 = htmlspecialchars($_POST['op2']);
                $from = htmlspecialchars($_POST['from']);
                $to = htmlspecialchars($_POST['to']);
            }
            if (!empty($nombres) && !empty($from) && !empty($to)) {
                if($op2 == 'Calculer') {
                    $base = base_convert($nombres,$from,$to);
                    echo $base;
                } }else {
                echo 'Veuillez renseigner tous les champs.';
            }

            ?>

        </p>
        <input name ="op2" type="submit" value="Calculer">
    </form>
</div>

<div>
    <h1 class="div">Exercice 8 du TP1</h1>
</div>

<div class="div">
    <form name="formulaire" method="post" action="Ex2.php">
        <p>

            <?php

            if(isset($_POST['nombre']) && isset($_POST['op3'])) {
                $nombre = htmlspecialchars($_POST['nombre']);
                $op3 = htmlspecialchars($_POST['op3']);
            }
            if (!empty($nombre)) {
                if($op3 == 'Afficher') {
                    printSuite($nombre);
                } }else {
                echo 'Veuillez renseigner tous les champs.';
            }

            ?>

        </p>
        <label>Hauteur : <input name="nombre" type="text" value="<?php if (isset($_POST['nombre'])) echo ($_POST['nombre']); ?>"></label><br><br>
        <input name ="op3" type="submit" value="Afficher">
    </form>
</div>

</body>
</html>
