  <link rel="stylesheet" href="style.css">

    <?php
    function genererTableau(){
        echo "<table border=\"1\"><tr><th class='prenom'>Prenom</th><th class='nom' >Nom</th><th class='photo'>Photo</th></tr>";
        $document = file("TP2_exo5.txt");


        for ($i = 0; $i < count($document); $i++){
            echo "<br/>";
            if(!ctype_space($document[$i]) && $fiche[$i] != ''){

                $tab = explode(";", $document[$i]);

                echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td><img class='image' src={$tab[2]}></td></tr>";
            }
        }
        echo '</table>';
    }

    genererTableau();
    echo "</body></html>";

    ?>
