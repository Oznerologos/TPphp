<?php

function ConvertToInt ($n, $baseIn, $baseTo) {
	echo base_convert($n, $baseIn, 10);
}

function ConvertIntToBase ($entier, $baseIn, $baseTo) {
	echo base_convert($entier, 10, $baseTo);
}

function ChangerBase ($entierAConvertir, $SaBaseInitial, $LaBaseVisee) {
	echo base_convert($entierAConvertir, $SaBaseInitial, $LaBaseVisee);
}

ConvertToInt(10,2,10);
echo "<br/>";
ConvertToInt(23,7,10);
echo "<br/>";
ConvertToInt("FF",16,10);
echo "<br/>";
ConvertToInt(123,10,10);
echo "<br/>";
ConvertToInt("A",11,10);

echo "<br>________________________<br><br>";


ConvertIntToBase(2,10,2);
echo "<br/>";
ConvertIntToBase(17,10,7);
echo "<br/>";
ConvertIntToBase(255,10,16);
echo "<br/>";
ConvertIntToBase(123,10,10);
echo "<br/>";
ConvertIntToBase(10,10,11);



echo "</body>
</html>";
?>
