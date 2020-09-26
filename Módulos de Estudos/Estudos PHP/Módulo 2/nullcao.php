<?php
//condicional null cao so funciona no php 7.4 em diante
$nome = 'Carlos  ';
$sobrenome = 'Uchôa';


$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;

