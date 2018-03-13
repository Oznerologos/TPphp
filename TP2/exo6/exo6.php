<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
<form class="" action='<?php echo $_SERVER["REMOTE_ADDR"]; ?>' method="post">

</form>
  </body>
</html>


<?php

function logVisite(){
$ip = $_SERVER['REMOTE_ADDR'];
$monfichier = fopen("Visite.txt", "a");
  $date =  date("d-m-Y");
  $dates = date("H:i:s");
  $jour = " " . $date ." " . "à" . " " . $dates;
fwrite($monfichier, "
" . $jour . " " . "ip:" .$ip  );
fclose($monfichier);
}


function lire(){
    $id = fopen("log.txt","r");
    $t = array();
    while ($ligne=fgets($id)) {
        //$t = explode("/", $ligne);
        array_unshift($t, explode(".", $ligne));
    }
    ?>
<table border="1">
    <tr><th>Heur</th><th>Nombre de vues</th>
    <?php
    $a1 = 0;
    $a2 = 0;
    $a3 = 0;
    $a4 = 0;
    $a5 = 0;
    $a6= 0;
    $a7 = 0;
    $a8 = 0;
    $a9 = 0;
    $a10 = 0;
    $a11 = 0;
    $a12 = 0;
    $a13 = 0;
    $a14 = 0;
    $a15 = 0;
    $a16 = 0;
    $a17 = 0;
    $a18 = 0;
    $a19 = 0;
    $a20 = 0;
    $a21 = 0;
    $a22 = 0;
    $a23 = 0;
    $a24 = 0;

    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "1H"){
            $a1++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "2H"){
            $a2++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "3H"){
            $a3++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "4H"){
            $a4++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "5H"){
            $a5++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "6H"){
            $a6++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "7H"){
            $a7++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "8H"){
            $a8++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "9H"){
            $a9++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "10H"){
            $a10++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "11H"){
            $a11++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "12H"){
            $a12++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "13H"){
            $a13++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "14H"){
            $a14++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "15H"){
            $a15++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "16H"){
            $a16++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "17H"){
            $a17++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "18H"){
            $a18++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "19H"){
            $a19++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "20H"){
            $a20++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "21H"){
            $a21++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "22H"){
            $a22++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "23H"){
            $a23++;
        }
    }
    for ($i = 0; $i < count($t); $i++){
        if($t[$i][1] == "0H"){
            $a24++;
        }
    }
    echo "
          <tr><td>0H</td><td>$a24</td></tr>
          <tr><td>1H</td><td>$a1</td></tr>
          <tr><td>2H</td><td>$a2</td></tr>
          <tr><td>3H</td><td>$a3</td></tr>
          <tr><td>4H</td><td>$a4</td></tr>
          <tr><td>5H</td><td>$a5</td></tr>
          <tr><td>6H</td><td>$a6</td></tr>
          <tr><td>7H</td><td>$a7</td></tr>
          <tr><td>8H</td><td>$a8</td></tr>
          <tr><td>9H</td><td>$a9</td></tr>
          <tr><td>10H</td><td>$a10</td></tr>
          <tr><td>11H</td><td>$a11</td></tr>
          <tr><td>12H</td><td>$a12</td></tr>
          <tr><td>13H</td><td>$a13</td></tr>
          <tr><td>14H</td><td>$a14</td></tr>
          <tr><td>15H</td><td>$a15</td></tr>
          <tr><td>16H</td><td>$a16</td></tr>
          <tr><td>17H</td><td>$a17</td></tr>
          <tr><td>18H</td><td>$a18</td></tr>
          <tr><td>19H</td><td>$a19</td></tr>
          <tr><td>20H</td><td>$a20</td></tr>
          <tr><td>21H</td><td>$a21</td></tr>
          <tr><td>23H</td><td>$a22</td></tr>
          " .
        "";
    ?>
</table>
<?php


}
echo logVisite();
echo lire();
?>
