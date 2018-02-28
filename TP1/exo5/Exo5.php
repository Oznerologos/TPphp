<?php
echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Formulaire</title><link rel='stylesheet' href='exo5.css'></head><body>";
$sondage = array("question"=>"Êtes-vous d'accord ?", "reponse"=>array("oui", "non"));
genererFormulaire($sondage);

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

$voix = array(360,40);

genererResultat($sondage,$voix);

function genererResultat($sondage, $vote){
    $totalVotes = 0;
    for($i = 0;$i <sizeof($vote); $i++){
        $totalVotes = $totalVotes+$vote[$i];
    }
    for ($i = 0; $i <sizeof($vote); $i++){
        $voix = $vote[$i];
        $pourcentVote[$i] =  round( ($voix/$totalVotes)*100);
        echo ("<p>".$sondage["reponse"][$i]." : <div class=\"graph\"><div class=\"bar\" style=\"width:$pourcentVote[$i]%\"></div></div> (".$pourcentVote[$i])."%)</p>";
    }
    echo "Nombres de votants: $totalVotes";
}
?>

