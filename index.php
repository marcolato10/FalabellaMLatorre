<?php
include("imprimir.php");
for ($i = 1; $i < 101; $i++) {
    $num[$i]=$i;
	$tres[$i]=$i%3;
	$cinco[$i]=$i%5;
	$mcm[$i]=$i%15;
}

$imp = new imprimir();
$aux1=$imp->arreglo_final($num,$tres,"Fallabella");
$aux2=$imp->arreglo_final($aux1,$cinco,"IT");
$aux3=$imp->arreglo_final($aux2,$mcm,"Integraciones");

echo "<pre>";
print_r($aux3);
echo "</pre>";


?>