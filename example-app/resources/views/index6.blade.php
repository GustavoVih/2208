<?php


echo '<center>';

echo '<div class = border>
		<h1 id = "main">Aula PWBE 06 // Dia: 05/08/2022
	</div>';

echo '<br><br>';

echo '<style>

		#main{
			color: #fff;
			font-family: Verdana;
			font-size: 5vh;
			padding-top: 1vh;
		}	

		body, html{
			background-color: black;
			color: #fff;
			font-size: 4vh;
			font-weight: bold;
		}

		.border{
			background-color: #000;
			border: solid #fff 5px;
			width: 50vw;
			height: 15vh;
			margin-top: 5vh;
		}

		h2{

			font-size: 2.5vh;

		}

	</style>';

function soma($num_1, $num_2){	//function é uma palavra reservada para fazer funções, por isso ela não é utilizada para declarar uma variável!!!

	$total = $num_1 + $num_2;

	return $total;

}

function subtracao($num_a, $num_b){

	$resultado = $num_a - $num_b;

	return $resultado;

}
function multiplicacao($num_c, $num_d){

	$resultado2 = $num_c * $num_d;

	return $resultado2;

}

function divisao($num_x, $num_y){

	$resultado3 = $num_x / $num_y;

	return $resultado3;

}


function alo (){		//Não necessariamente uma função deve retornar uma variável ou receber parâmetros!!!

	return 'Oi';

}

echo 'O resultado da soma 10 + 10 e: ';
echo soma(10, 10);

echo '<br><br>';

echo alo();

echo '<br><br>';

echo 'O resultado da subtracao 97 - 71 e: ';
echo subtracao(97, 71);

echo '<br><br>';

echo 'O resultado da multiplicacao 21 * 37 e: ';
echo multiplicacao(21, 37);

echo '<br><br>';

echo 'O resultado da divisao 100 / 10 e: ';
echo divisao(100, 10);

echo '<br><br><br>';

echo '<form action = "contas.php" method = "get">

		<h2>Insira uma operacao com numeros aqui: </h2>	    <input type = "text" class = "barra" name = "barra">
		<br><br>
		<input type = "submit" value = "Clique aqui!!!">

	</form>';

echo '</center>';

?>