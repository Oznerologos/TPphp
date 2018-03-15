<?php
/*
function ConvertToInt ($n, $baseIn, $baseTo) {
	$JeDetesteOlivier = base_convert($n, $baseIn, 10);
	var_dump($JeDetesteOlivier);
}

function ConvertIntToBase ($entier, $baseIn, $baseTo) {
	$JeDetesteOlivier = base_convert($entier, 10, $baseTo);
	var_dump($JeDetesteOlivier);
}*/

function ChangerBase ($entierAConvertir, $SaBaseInitial, $LaBaseVisee) {
	intval($entierAConvertir);

	$JeDetesteOlivier = base_convert($entierAConvertir, $SaBaseInitial, $LaBaseVisee);
	echo $JeDetesteOlivier;
}

?>

</body>
</html>
