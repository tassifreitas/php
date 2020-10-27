<?php
	function Palindromo($STR)
	{
		//função que inverte a string
		$palavra_inversa=strrev($STR);
		
		//compara a string com a string invertida para verificar se é palindromo
		if((strcmp($STR, $palavra_inversa))==0){
			echo "String \"$STR\" True\n";
		}
		else{
			echo "String \"$STR\"  False\n";
		}
		
	}
	
	//testes
	Palindromo("aabaa");
	Palindromo("a");
	Palindromo("abac");

?>

