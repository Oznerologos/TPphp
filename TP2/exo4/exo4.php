<html>
<title>
</title>
<body>
  <h1>Site web</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label>Produit n° 1:</label>
    <input type="radio" name="produit" value="1"><br>

    <label>Produit n° 2:</label>
    <input type="radio" name="produit" value="2"><br>

    <label>Produit n° 3:</label>
    <input type="radio" name="produit" value="3"><br><br>

    <input type="submit" value="Accéder à la page du produit">
</form>
</body>
</html>
<?php

$produit1 = array("Numero"=>1,"Nom"=>"Montre", "Prix"=>"100 euros", "Descriptif"=>"Une jolie montre.");
$produit2 = array("Numero"=>2,"Nom"=>"Souris", "Prix"=>"10 euros", "Descriptif"=>"Une jolie souris.");
$produit3 = array("Numero"=>3,"Nom"=>"Clavier", "Prix"=>"20 euros", "Descriptif"=>"Un joli clavier.");
$produits = array($produit1, $produit2, $produit3);
function genererLaListeDeProduits($produits){
    foreach($produits as $informations){
        foreach($informations as $key=>$value){
            echo $key.': '.$value.'<br>';}
        echo "<br>";}
}

if (isset($_GET['produit'])) {
    $t =$_GET['produit'];

    switch ($t){
        case 1:
            foreach ($produit1 as $c=>$v){
         echo $c.": ".$v."<br>";
    }
    break;

        case 2:
             foreach ($produit2 as $ke=>$va){
         echo $ke.": ".$va."<br>";

    }
            break;
    case 3:
        foreach ($produit3 as $keyy=>$valu){
            echo $keyy.": ".$valu."<br>";
        }
        break;
}}
else{
    echo (genererLaListeDeProduits($produits));
}
?>
