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


			$mostrar='';
			$mostrar.= '<table border="1">
						<tr>
							<td>Valor real</td>
							<td>valor solicitado</td>
						</tr>
						';

			
			foreach ($aux3 as $num => $valor) {	
				$mostrar.= '<tr>
							<td>'.$num.'</td>
							<td>'.$valor.'</td>
						</tr>'; 
					
			}		
			$mostrar .= '</table>';


echo $mostrar .'<br>';		



?>