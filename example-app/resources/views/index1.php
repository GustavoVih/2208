<?php

include_once("functions.php");

$dj = ['Tiesto', 'Steve Aoki', 'David Guetta', 'Skrillex', 'Martin Garrix', 'Aswell', 'Sudarius', 'Benny Benassi'];

$cantor = 'The weeknd';

$cantora = ['Sia', 'Beyonce', 'Britney Spears', 'Madonna', 'Adele'];

$banda = ['Kiss', 'Queen', 'ABRA'];

echo '<pre>';
print_r ($dj);
echo '</pre><br><br>';

//Função 'is_array()' que, verifica se uma determinada variável é um array!!!
if(is_array($dj)):
    echo 'É um array';
else:
    echo 'Não é um array';
endif;

br(2);

//Função 'in_array()' que, verifica se uma string está contida em um array!!!
if(in_array('Sudarius', $dj)):
    echo 'É<br><br>';
else:
    echo 'Não é<br><br>';
endif;

//Função 'count()' que, conta a quantidade de elementos dentro de uma variável (array)!!!
echo count($dj);

br(2);

//Função 'array_merge(duas arrays)' que, fundem as duas array em apenas uma só!!!
$artista = array_merge($dj, $cantora);

echo '<pre>';
print_r ($artista);
echo '</pre>';

$artista2 = $cantora;
format($artista2);

br(2);

//Função 'array_shift(uma array aqui)' que, exclui o primeiro elemento do array!!!
array_shift($banda);
format($banda);

br(2);

//Função 'array_pop(uma array aqui)' que, exclui o último elemento do array!!!
array_pop($banda);
format($banda);

$lista = ['Arroz', 'Feijão', 'Macarrão', 'Batata', 'Arroz', 'Batata'];

br(2);

format($lista);

br(2);

//Função 'array_unique(uma array aqui)' que, exclui os elementos repetidos de uma array!!!
$lista = array_unique($lista);
format($lista);

$corinthians = [
        12 => 'Cássio',
        23 => 'Fagner',
        4 => 'Gil',
        31 => 'Balbuena',
        26 => 'Fabio Santos', 
        5 => 'Maycon',
        37 => 'Du Queiroz',
        8 => 'R. Augusto',
        10 => 'Willian',
        9 => 'R. Guedes',
        7 => 'Y. Alberto',
];

br(2);
format($corinthians);
br(2);

//Função arsort(), organiza uma array em ordem crescente pelo alfabeto!!!
arsort($corinthians);
format($corinthians);

//Função asort(), organiza uma array em ordem decescente pelo alfabeto!!!
br(2);
asort($corinthians);
format($corinthians);
br(2);

//Função sort(), organiza uma array em ordem crescente numérica!!!
sort($corinthians);
format($corinthians);

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Pega uma array, e daí, aplica uma funçõa à ela!!!
$pares = array_filter($numeros, 'pares');

br(2);
format($pares);

$numeros2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Brincando !!!
$impares = array_filter($numeros2, 'impares');

br(2);
format($impares);
br(2);

//-----------Criptografia!!!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$senha = 'suasenha';
echo $senha;
br(2);

//, mais bobinha, é via dupla, fácil de descriptografar!!!
//Usado para dados sensíveis, mas não tão importante, pode-se usar em endereços!!!
$valor_criptografado = base64_encode($senha);
echo $valor_criptografado;
br(2);

//MD5 é um pouco mais forte, mão única, vai demorar um tempinho para descriptografar isso hein!!!
$valor_criptografado = md5($senha);
echo $valor_criptografado;
br(2);

//Quando você criptografa excelentemente, o código fica muito grande, pode 'explodir' o banco de dados!!!
//por isso em alguns sites você pode ter uma senha de até 8 dígitos, para que seja cabível a criptografia!!!
//SHA1 é forte pra caramba, mão única, tente a sorte para descriptografar!!! (Nõa é impossível, porém, vai demorar alguns anos!!!)
$valor_criptografado = sha1($senha);
echo $valor_criptografado;
br(2);

//Criptografia de via dupla (duas vias), pode criptografar e ser descriptografar facilmente (base64_encode)!!!
//Criptografia de mão única, pode criptografar e ser descriptografado, porém é muito difícil, você irá levar alguns anos para descriptografar!!!

//Para senha, CPF's, etc, dados muito importantes,  use SHA1 !!!!

?>