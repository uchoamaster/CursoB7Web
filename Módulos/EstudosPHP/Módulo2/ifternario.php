<?php
// vamos aprender operador ternário, em outras palavras, é um condicional ternário
// basicamente um if de uma linha
 $idade = 12;

// if ($idade < 18) {
//     echo 'Menor de idade';
// }else{
//     echo 'Maior de idade';
// }

// agora fazendo o if de uma linha ou if ternário seria assim 

//(Condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

// echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';

// se eu quiser armazenar dentro da variavel um operador booleano como faço?

$menordeIdade = ($idade < 18) ? true : false;

if ($menordeIdade){
    echo 'Menor';
}else {
    echo 'Maior';
}

