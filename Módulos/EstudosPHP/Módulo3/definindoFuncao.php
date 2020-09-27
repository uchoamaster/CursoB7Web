<?php 
function subsequente() {
    for ($q=0; $q < 10; $q++) { 
        echo $q. "<br/>";
    }

    echo "<hr/>";
}
subsequente();
subsequente();
subsequente();
?>

<?php 

function latir() {
    echo "au au <br/>";
}

for ($q=0; $q < 20 ; $q++) { 
    latir();
}
?>