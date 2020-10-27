
<?php
	function SequenciaCrescente($array)
	{
		//verifica se o valor na posição inferior é maior que o da posição superior percorrendo o array e salva em um array auxiliar
		for ($i = 0; $i < count($array); $i++) 
		{
			
			//verificação se a sequência crescente está correta
			if($array[$i-1] <= $array[$i]){
				$array_comparacao1[$i]=$array[$i];
				
			}
				
		}
		
		//verifica a diferença entre o array auxiliar e o array para verificar se estão na sequência crescente
		$arrayDiferenca = array_diff($array, $array_comparacao1);
		
			if($arrayDiferenca==NULL){
							
				echo "[";
				foreach ($array as $v) {
					echo "$v  ";
				}
				echo "] true\n\n";
			}
			else{
				echo "[";
				foreach ($array as $v) {
					echo "$v  ";
				}
				echo "] false\n\n";
				
			}
		
		
		
	}
	
	
/*EXEMPLOS DE TESTE
[1, 3, 2, 1]  false
[1, 3, 2]  true
[1, 2, 1, 2]  false
[3, 6, 5, 8, 10, 20, 15] false
[1, 1, 2, 3, 4, 4] false
[1, 4, 10, 4, 2] false
[10, 1, 2, 3, 4, 5] true
[1, 1, 1, 2, 3] false
[0, -2, 5, 6] true
[1, 2, 3, 4, 5, 3, 5, 6] false
[40, 50, 60, 10, 20, 30] false
[1, 1] true
[1, 2, 5, 3, 5] true
[1, 2, 5, 5, 5] false
[10, 1, 2, 3, 4, 5, 6, 1] false
[1, 2, 3, 4, 3, 6] true
[1, 2, 3, 4, 99, 5, 6] true
[123, -17, -5, 1, 2, 3, 12, 43, 45] true
[3, 5, 67, 98, 3] true*/
	$arr = array(1, 3, 2, 1);
	SequenciaCrescente($arr);
	$arr = array(1, 3, 2);
	SequenciaCrescente($arr);
	$arr = array(1, 2, 1, 2);
	SequenciaCrescente($arr);
	$arr = array(3, 6, 5, 8, 10, 20, 15);
	SequenciaCrescente($arr);
	$arr = array(1, 1, 2, 3, 4, 4);
	SequenciaCrescente($arr);
	$arr = array(1, 4, 10, 4, 2);
	SequenciaCrescente($arr);
	$arr = array(10, 1, 2, 3, 4, 5);
	SequenciaCrescente($arr);
	$arr = array(1, 1, 1, 2, 3);
	SequenciaCrescente($arr);
	$arr = array(0, -2, 5, 6);
	SequenciaCrescente($arr);
	$arr = array(1, 2, 3, 4, 5, 3, 5, 6);
	SequenciaCrescente($arr);
	$arr = array(40, 50, 60, 10, 20, 30);
	SequenciaCrescente($arr);
	$arr = array(1, 1);
	SequenciaCrescente($arr);
	$arr = array(1, 2, 5, 3, 5);
	SequenciaCrescente($arr);
	$arr = array(1, 2, 5, 5, 5);
	SequenciaCrescente($arr);
	$arr = array(10, 1, 2, 3, 4, 5, 6, 1);
	SequenciaCrescente($arr);
	$arr = array(1, 2, 3, 4, 3, 6);
	SequenciaCrescente($arr);
	$arr = array(1, 2, 3, 4, 99, 5, 6);
	SequenciaCrescente($arr);
	SequenciaCrescente($arr);
	$arr = array(123, -17, -5, 1, 2, 3, 12, 43, 45);
	SequenciaCrescente($arr);
	SequenciaCrescente($arr);
	$arr = array(3, 5, 67, 98, 3);
	SequenciaCrescente($arr);
	
?>
