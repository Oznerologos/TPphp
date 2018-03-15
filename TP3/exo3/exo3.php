<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Annexes/annexe.css">
    <title>TP3 exo3</title>
</head>

<body>
  <form method="post">
    <label for="joker">Cherchez un mot grâce aux jokers "?" :</label>
    <input type="text" name="joker" id="joker">
    <input type="submit" value="A l'aide !!">
  </form>

<?php

$file = 'dictionnaire.txt';
$joker = '';

function regexp($path, $str) {
 $contents = file_get_contents($path);
 $joker = str_replace('?', '.', $str);
 $regexp = "/\R$joker\R/i";
 if (preg_match_all($regexp, $contents, $words))return $words;
 else return false;
}
if (isset($_POST['joker']) && !empty($_POST['joker'])) {
  $joker = $_POST['joker'];
  if ($words = regexp($file, $joker)) {
    echo "<br><br><h4 class='div'>Mots trouvés :</h4>";
      foreach ($words[0] as $word) {
      echo "<div class='div'>-$word</div>";
      }
    } else {
        echo "<br><div class='color div'>Mot introuvable</div>";
  }
}

?>

</body>
</html>
