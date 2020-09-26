<?php 

// FOREACH SIGNIFICADO

// FOR EACH = PARA CADA

$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermendo em pó',
    'corante'
];

// foreach ($ingredientes as $ingrediente) {
//     echo "Item: ".$ingrediente."<br/>";
// }


// print_r($ingredientes);

echo '<h2>Ingredientes</h2>';
echo '<ul>';
foreach ($ingredientes as $chave => $valor) {
    echo '<li>'. "Item ".( $chave + 1).": ".$valor."<br/>" .'</li>';
}
echo '</ul>';

echo '<hr>';

echo '<ol>';
foreach ($ingredientes as $chave => $valor) {
    echo '<li>'.$valor."<br/>" .'</li>';
}
echo '</ol>';
?>