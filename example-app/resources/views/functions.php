<?php

function br($n){
    for($zero = 0; $zero < $n; $zero++){
        echo '<br>';
    }
}

function format($variable){
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
}

function pares ($valor){
    if($valor %2 == 0){
        return $valor;
    }
}

function impares ($value){
    if($value % 2 != 0){
        return $value;
    }
}

?>