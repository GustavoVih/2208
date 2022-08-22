<!-- As questões de lógica estão no final do código!!! -->

<?php

    /* 
        Aritméticos (*, /, +, -)
        Comparação (==, !=, <, >, <=, >=, ===)
        Concatenação (.) (concatenou, vira String!!!)
        Lógicos (!, &&, ||, and, xor, or)
        Atribução (=, .=, ++, +=, --, -=)
    */

    $multiplicação  = 10*10;
    $divisão = 10/2;
    $soma = 10+10;
    $subtracao = 50-29;
    $resto = 5/2;
    $exponenciacao = 2**2;

    $ano_atual = $soma.'22';
    $ano_passado = $soma . $subtracao;

    echo "<br>{$ano_atual}";

    echo "<br><br>{$ano_passado}";

    $dois_igual = 2 === '2'; //( ===, analisa o tipo da variável também)
    $diferente_igual = 2 != 1;
    $menor_que = 2 < 1;
    $maior_que = 2 > 1;
    $menor_que_igual = 2 <= 2;
    $maior_que_igual = 1 >= '1';
    $tres_igual = 2 === '2';

    echo "<br><br>{$dois_igual}";
    
    echo "<br>{$diferente_igual}";
    
    echo "<br>{$menor_que}";
    
    echo "<br>{$maior_que}";
    
    echo "<br>{$menor_que_igual}";
    
    echo "<br>{$maior_que_igual}";
    
    echo "<br>{$tres_igual}";

    if($dois_igual):             //Quando é só uma linha para cada condição (verdadeiro(if) e falso(else)) eu posso usar o if sem chaves!!! 
        echo '<br>verdadeiro';  //Uma linha!!!
    else:
        echo '<br>falso';       //Outra linha!!!
    endif;

    if($diferente_igual):   // = 2 != 1
        echo '<br>verdadeiro';
    else:
        echo '<br>falso';
    endif;

    if($menor_que):     // = 2 < 1
        echo '<br>verdadeiro';
    else:
        echo '<br>falso';
    endif;

    if($menor_que_igual):   // = 2 <= 2
        echo '<br>verdadeiro';
    else: 
        echo '<br>falso';
    endif;

    if($maior_que_igual):   // = 1 >= '1', ele compara mesmo sendo uma string
        echo '<br>verdadeiro';
    else: 
        echo '<br>falso';
    endif;

    $a = 1;
    $b = 5;

    $incremento = ++$a; // $a = $a + 1 OU $a += 1
    echo  "<br><br>".$incremento;

    $decremento = --$b; // $b = $b - 1 OU $a -= 1
    echo '<br>'.$decremento;

    $a2 = 'Oi';
    $a2 = $a2 . 'Professor';    //Isso aqui se chama Subescrita de variável!!!

    $b2 = 'Olá';
    $b2 .= 'Professor';     // .= já concatena!!!

    echo "<br><br>{$a2}";
    echo "<br><br>{$b2}";

    echo"<br><br>Tabela OR<br><table>
    
        <tr>
            <th>A</th>
            <th>B</th> 
            <th>A -> B</th>
        </tr>

        <tr>
            <td>1</td>
            <td>0</td> 
            <td>1</td>
        </tr>

        <tr>
            <td>0</td>
            <td>1</td> 
            <td>1</td>
        </tr>

        <tr>
            <td>1</td>
            <td>1</td> 
            <td>1</td>
        </tr>

        <tr>
            <td>0</td>
            <td>0</td> 
            <td>0</td>
        </tr>
        
        </table>";

        echo"<br><br>Tabela AND<br><table>
    
        <tr>
            <th>A</th>
            <th>B</th> 
            <th>A -> B</th>
        </tr>

        <tr>
            <td>1</td>
            <td>0</td> 
            <td>0</td>
        </tr>

        <tr>
            <td>0</td>
            <td>1</td> 
            <td>0</td>
        </tr>

        <tr>
            <td>1</td>
            <td>1</td> 
            <td>1</td>
        </tr>

        <tr>
            <td>0</td>
            <td>0</td> 
            <td>0</td>
        </tr>
        
        </table>";

        echo"<br><br>Tabela NOT<br><table>
    
        <tr>
            <th>A</th>
            <th>X</th>
        </tr>

        <tr>
            <td>1</td>
            <td>0</td> 
        </tr>

        <tr>
            <td>0</td>
            <td>1</td>
        </tr>
        
        </table>";


    echo '<style>

        table, th, td, tr{
            border: 1px solid black;
            height: 10%;
        }
    
    </style>';

    $booleano1 = true;
    $booleano2 = false;
    $booleano3 = true;
    
    if($booleano1 and $booleano2){
        echo '<br><br>Verdadeiro';
    }else{
        echo '<br><br>Falso';
    }

    if($booleano1 or $booleano2){
        echo '<br><br>Verdadeiro';
    }else{
        echo '<br><br>Falso';
    }

    if(!$booleano2){        //!$var é a negação de $var, isto é ,seu valor lógico inverte!!! O if acaba se perguntando se não é verdadeiro, ou se é falso!!!
        echo '<br><br>Verdadeiro';
    }else{
        echo '<br><br>Falso';
    }

    if($booleano1 xor $booleano3){
        echo '<br><br>Verdadeiro';
    }else{
        echo '<br><br>Falso';
    }

    if(!$booleano1 || !$booleano3): // 0 e 0 = 0, lembre-se disso!
        echo '<br><br>Verdadeiro';
    else:
        echo '<br><br>Falso';
    endif;

/*

Considere A = 1 e B = 0 e resolva!!!

a) (A and B) or (B or B) = 0

b) not B = 1

c) (A and A) and b = 0

d) (not B and A) or (not B and not B) = 1

e) (A xor A) and (B and B) or (not(B xor A) or B) = 1

f) not (A and B) and (A or B) and (A or A) = 0

g) (not A and not A) and (not B or A) and (A) = 0

*/

?>