<?php
//código que calculao seculo a partir do ano
	function SeculoAno($ano)
	{
		$resto=0;
		$pre_resultado=0;
		
		$pre_resultado = (intdiv($ano,100));
		$resto=$ano%100;
		//verifica se o resto da divisão por 100 é 0 se for pega o valor inteiro da divisão do ano por 100
		if($resto==0){
			$seculo=$pre_resultado;
			//echo "Ano $ano = século $Seculo\n";
		}
		//Senão o resultado do século será a o resultado da divisão inteira + 1
		else{
			$seculo=$pre_resultado+1;
			//echo "Ano $ano = século $Seculo\n";
		
		}
		return $seculo;
	}
	
	//testes
	$ano=1905;
	$Seculo = SeculoAno($ano);
	echo "Ano $ano = século $Seculo\n";
	$ano=1700;
	$Seculo = SeculoAno($ano);
	echo "Ano $ano = século $Seculo\n";
?>

