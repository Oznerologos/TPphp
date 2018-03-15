<!DOCTYPE html>
<html>
<head>
	<title>TP1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="exo2.css">
</head>
<body>
	<h1>Tableaux.</h1>
	<?php

		function trier($informations)
		{
			$TableauTrie = False;
			while(!$TableauTrie)
			{
				$TableauTrie = True;
				for ($i=0; $i < sizeof($informations)-1; $i++)
				{
					//echo $informations[$i]["nom"]." contre ".$informations[$i+1]["nom"];
					if($informations[$i]["nom"]>$informations[$i+1]["nom"])
					{
						//echo "je rentre";
						$TableauTrie = False;
						$informations = echanger($informations, $i, $i+1);
					}
					else if($informations[$i]["nom"]==$informations[$i+1]["nom"])
					{
						if($informations[$i]["prenom"]>$informations[$i+1]["prenom"])
						{
							//echo "je rentre";
							$TableauTrie = False;
							$informations = echanger($informations, $i, $i+1);
						}
					}
				}
			}
			return $informations;
		}

		function echanger($tableau, $val1, $val2)
		{
			$intermediaire = $tableau[$val1];
			$tableau[$val1] = $tableau[$val2];
			$tableau[$val2] = $intermediaire;
			return $tableau;
		}

		function genererGalerie($informations)
		{
			echo "<table><tr><th>Prénom</th><th>Nom</th><th>Photo</th></tr>";
			foreach ($informations as $key => $value) {
				echo "<tr>";
				foreach ($value as $cle => $valeur) {
					echo "<td>";
					if ($cle == "photo")
						echo "<img src='".$valeur."'>";
					else
						echo $valeur;
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

		$p1 = array("prenom"=>"Victor", "nom"=>"Hugo", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');

		$p2 = array("prenom"=>"Jean", "nom"=>"De La Fontaine", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');

		$p3 = array("prenom"=>"Pierre", "nom"=>"Corneille", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');

		$p4 = array("prenom"=>"Jean", "nom"=>"Racine", "photo"=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

		$informations = array($p1, $p2, $p3, $p4);
		$informations = trier($informations);
		genererGalerie($informations);
	?>
</body>
</html>
