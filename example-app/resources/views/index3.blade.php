<?php

    $sentenca = "Joaquim não foi ao Shopping hoje!";

    //Trocar Joaquim por Maria sem trocar diretamente na variável!
    
    $sentenca2 = str_replace("Joaquim", "Maria", $sentenca);

    echo "<br><br><br><center><b>";

    echo $sentenca2;

    //Pegar somente a palavra shopping da sentença (sobre o Joaquim!)

    $shopping = substr($sentenca, 19, -6);

    echo "<br><br><br>".$shopping;

    $sentencaMinuscula = strtolower($sentenca); // Função para deixar toda uma String em caixa baixa (strtolower())
    $sentencaMaiuscula = strtoupper($sentenca); // Função para deixar toda uma String em caixa alta (strtoupper())

    echo "<br><br><br>".$sentencaMaiuscula; // Imprimindo a frase do Joaquim, em maiusculo!

    echo "<br><br><br>".$sentencaMinuscula; // Imprimindo a frase do Joaquim, em minusculo!

    echo "<br><br><br>".lcfirst($sentencaMaiuscula);    //  Colocar somente o primeiro caracter em caixa baixa!!!

    $cod = 10;
    $sql1 = "SELECT * FROM CLIENTE WHERE COD = {$cod}";   //  A aspas duplas, se automaticamente encontar uma variável, irá colocar o valor dela, pode colocar chaves, o nome disso é interpolção!!!
    echo "<br><br><br>".$sql1;                              //Por isso ela é mais pesada, não é obrigatório colocar chaves, porém se quiser reforçar, para que não dê erro!!!

    $sql2 = 'SELECT * FROM CLIENTE WHERE COD = '.$cod;
    echo "<br><br><br>".$sql2;

    $nota = 9.99;

    echo "<br><br>".$nota." (nota normal)";  // Mostrará a nota mesmo (9.99)!!!

    echo "<br><br>".floor($nota)." floor()";   // Mostrará 9, pois a função floor() arredonda para baixo!!!

    echo "<br><br>".ceil($nota)." ceil()";    // Mostrará 10, pois a função ceil() arredonda para cima!!!

    echo "<br><br>".round($nota)." round()";   // Mostrará 10, pois a função round() arredonda para o mais perto!!!


// ---------------------------------------------------------------Booleano!!!--------------------------------------------------------------------------------------------------------------


    $true = true;
    $false = false;
    
    echo "<br><br><br>".$true." (variável true, que tem true como valor!!!)";

    $bool = 3 > 0;

    echo "<br><br><br>".$bool." (variável bool1, que tem 3 > 0 como valor!!!)";

    $bool2 = 3 < 0;

    echo "<br><br><br>".$bool2." (variável bool2, que tem 3 < 0 como valor!!!)";

    $bool3 = 3 == 3;

    echo "<br><br><br>".gettype($bool2)." (tipo da variável bool3, que tem 3 == 3 como valor!!!)";


// ---------------------------------------------------------------Booleano com IFs e ELSEs!!!--------------------------------------------------------------------------------------------------------------

    $n1 = 1;
    $n2 = 2;

    if($n1 == $n2){
        echo "<br><br><br>n1 é igual a n2";
    } else{
        echo "<br><br><br>n1 é diferente a n2";
    }

    if($n1 > $n2){
        echo "<br><br><br>n1 é maior a n2";
    } else{
        echo "<br><br><br>n1 é menor a n2";
    }

    if($n1 < $n2){
        echo "<br><br><br>n1 é menor a n2";
    } else{
        echo "<br><br><br>n1 é maior a n2";
    }

    if($n1 >= $n2){
        echo "<br><br><br>n1 é maior ou igual a n2";
    } else{
        echo "<br><br><br>n1 é menor e diferente a n2";
    }

    if($n1 <= $n2){
        echo "<br><br><br>n1 é menor ou igual a n2";
    } else{
        echo "<br><br><br>n1 é maior a n2";
    }

    echo "</center></b>";

?>