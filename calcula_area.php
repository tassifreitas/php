<?php
	function CalculaArea($num)
	{ 
		$quadrados_area=1;
		
		//Cálculo dos quadrados em função da área n=1, n=2 ... n=n
		//Se n=1 quantidade de quadrados = 1
		//Senão quantidade de quadrados será a o valor da área de (n-1)+(4*n-1)
		//exemplo se n=4, quantidade de quadrados será a quantidade de quadrados de n=3+(4*3)
		
		for ($i = 1; $i < $num; $i++) {
			if($num <= 1){
				
					$quadrados_area = 1;
					
			} else { 
			
				$quadrados_area = $quadrados_area+(4*$i); 
				
			}
		} 
		
		
		
		
		return $quadrados_area; 
	} 
	
	//testes
	$num = 2; 
		echo "N $num = ";
		echo CalculaArea($num) ;
		echo "\n\n";
	$num = 5;
		echo "N $num = ";
		echo CalculaArea($num) ;
		echo "\n\n";
	$num = 6;
		echo "N $num = ";
		echo CalculaArea($num) ;
		echo "\n\n";
	$num = 3;
		echo "N $num = ";
		echo CalculaArea($num) ;
		echo "\n\n";
	$num = 4;
		echo "N $num = ";
		echo CalculaArea($num) ;
		echo "\n\n";		
	$num = 1;
		echo "N $num = ";
		echo CalculaArea($num) ;
		echo "\n\n";
	
?>

	