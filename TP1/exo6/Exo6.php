<?php
$s1 = array("question"=>"Êtes-vous heureux ?", "reponse"=>array("oui", "non", "peut-être"));
$s2 = array("question"=>"Êtes-vous triste ?", "reponse"=>array("oui", "non"));
$s3 = array("question"=>"Existe-t-il des gens heureux ?", "reponse"=>array("oui", "non"));
$sondages = array($s1, $s2, $s3);
$t = rechercheSondage($sondages, "heureux");
rechercheSondage($sondages,"heureux");

foreach ($t as $sondage) genererFormulaire($sondage);

    function genererFormulaire($sondage)
    {
        echo "<form>".$sondage['question'];

        for ($i = 0; $i <sizeof($sondage["reponse"]); $i++) {

            echo "<br><input type=\"radio\" name=\"".$sondage["question"]."\" id=\"".$sondage["reponse"][$i]."\" value=\"".$sondage["reponse"][$i]."\">".
                "<label for=\"".$sondage["reponse"][$i]."\">".$sondage["reponse"][$i]."</label><br>";
        }

        echo "<br><br><input type=\"button\" value=\"Répondre\">";
        echo "</form>";

}

function rechercheSondage(){}
?>