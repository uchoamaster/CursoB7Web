<?php 
$tipo = 'foto';

// if($tipo == 'foto') {
//     echo 'Exibindo uma foto';
// }
// if($tipo == 'video') {
//     echo 'Exibindo um video';
// }
// if($tipo == 'texto') {
//     echo 'Exibindo um texto';
// }
//mudando o codigo para o switch
switch ($tipo) {
    case 'foto':
        echo 'Exibindo FOTO';
        break;
    case 'video':
        echo 'Exibindo VIDEO';
        break;
    case 'texto':
        echo 'Exibindo TEXTO';
        break;    
}

?>