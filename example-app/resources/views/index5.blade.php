<?php

    //Exemplinhos do Professor!!!

    //Gerando um número aleatório de 1 à 10!!!
    $numero = rand(1, 100);

    if($numero % 2 == 0){
        echo "{$numero} é par!";
    }else{
        echo "{$numero} é ímpar!";
    }

    //Operador Ternário (Que resume um if à uma linha!!!)

    echo ($numero%2) == 0 ? "<br><br>{$numero} é par!" : "<br><br>{$numero} é ímpar!";

//--------------------------------------------------------------------------------------------------------------------------------------------------

    echo '<br><br><br>';

    echo '<form action = "math.php" method = "post">
            Insira a sua idade aqui:           <input type = "text" id = "table" name = "table"></input>
            <br><br>
            Você é alfabetizado?<br>
            <input type="radio" id="sim" name="alfabetizado" value="sim">
            <label for="html">Sim</label><br>
            <input type="radio" id="nao" name="alfabetizado" value="nao">
            <label for="css">Não</label>
            <br><br>
            <input type = "submit" value = "Clique aqui!!!">
        </form>';


?>