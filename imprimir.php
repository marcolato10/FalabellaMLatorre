<?php
class imprimir{
	public function imprimir(){
	}
	public function arreglo_final($a1,$a2,$valor){
		for ($i = 1; $i < 101; $i++) {
			if($a2[$i]==0){
				$a1[$i]=$valor;
			}
		}
		return $a1;
		
	}
}


?>