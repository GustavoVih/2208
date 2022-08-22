<?php

	$membro = $_GET["barra"];

	$lenght = (strlen($membro)) - 1; // tem o (-1) para excluir o símbolo da operação!!!

	if($lenght == 2){
		$num_um = substr($membro, 0, 1);
		$num_dois = substr($membro, 0, -2);
		echo $num_um;
		echo $num_dois;
	}

	//echo $lenght;

	echo '<center>';

	if(str_contains($membro, '+')){
		echo 'AMOGUS!111!!!';
	}

	if(str_contains($membro, '-')){
		echo 'SUS!111!!!';
	}

	if(str_contains($membro, '*')){
		echo 'ALEJANDRO!111!!!';
	}

	if(str_contains($membro, '/')){
		echo 'SUS DE ALEJANDRO!111!!!';
	}

	echo '</center>';

?>