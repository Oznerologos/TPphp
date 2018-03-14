<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="div">
<table border="1">
    <tr><th class="nom">Nom</th><th class="prenom">Prenom</th><th class="photo">Photo</th></tr>
<?php
    $file = file("../exo5/TP2_exo5.txt");
    $file = implode("",$file);
    $file = explode("\r\n", $file);

    foreach ($file as $ligne) {

        $espace = explode(" ", $ligne);
        $point = explode(";", $ligne);

echo "<tr><td>$explode[0]</td><td>$explode[1]</td><td><img class='img' src={$explode [2]}></td></tr>";
    }
?>
</table>
</div>
</body>
</html>
