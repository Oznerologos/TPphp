<?php
/*
function ConvertToInt ($n, $baseIn, $baseTo) {
	$convertisseur = base_convert($n, $baseIn, 10);
	var_dump($convertisseur);
}

function ConvertIntToBase ($entier, $baseIn, $baseTo) {
	$convertisseur = base_convert($entier, 10, $baseTo);
	var_dump($convertisseur);
}*/

function ChangerBase ($entierAConvertir, $SaBaseInitial, $LaBaseVisee) {
	intval($entierAConvertir);

	$convertisseur = base_convert($entierAConvertir, $SaBaseInitial, $LaBaseVisee);
	echo $convertisseur;
}

?>

</body>
</html>
