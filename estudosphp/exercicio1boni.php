<?php 
$lista = [
    'nome' => 'Uchôa',
    'idade' => 90,
    'atributos' => [
        'forca' => 600,
        'agilidade' => 80,
        'destreza' => 50,
        'vida' => 1000,
        'mana' => 928
    ],
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['atributos']['vida']."<br/>";
echo "MANA: ".$lista['atributos']['mana']."<br/>";
echo "AGILIDADE: ".$lista['atributos']['agilidade']."<br/>";
echo "DESTREZA: ".$lista['atributos']['destreza'];

?>