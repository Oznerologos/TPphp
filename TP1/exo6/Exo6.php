<?php

$s1 = array("question"=>"Êtes-vous heureux ?", "reponse"=>array("oui", "non", "peut-être"));
$s2 = array("question"=>"Êtes-vous triste ?", "reponse"=>array("oui", "non"));
$s3 = array("question"=>"Existe-t-il des gens heureux ?", "reponse"=>array("oui", "non"));
$sondages = array($s1, $s2, $s3);
$t = rechercheSondage($sondages, "heureux");
foreach($t as $sondage) genererFormulaire($sondage);

//fonction qui génère le formulaire

    function genererFormulaire($sondage){
        echo "<form>".$sondage["question"];

        for ($i = 0; $i<sizeof($sondage["reponse"]); $i++) {

            echo "<br><input type=\"radio\" name=\"".$sondage["question"]."\" id=\"".$sondage["reponse"][$i]."\" value=\"".$sondage["reponse"][$i]."\">".
                "<label for=\"".$sondage["reponse"][$i]."\">".$sondage["reponse"][$i]."</label><br>";
        }

        echo "<br><br><input type=\"button\" value=\"Répondre\">";
        echo "</form>";

}
//fonction qui cherche le sondage par rapport au mot clé heureux!
function rechercheSondage($sondages, $motcle)
{
    $t = [];
    for($i=0; $i<sizeof($sondages);$i++)
    {
        if(substr_count($sondages[$i]["question"], $motcle) != 0)
        {
            $t[] = $sondages[$i];
        }
    }
    return $t;
}

?>
