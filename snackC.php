Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

<?php

$arrayRandom = [];

while (count($arrayRandom) <= 15) {
    $randomInt = rand(0, 99);
    if (! in_array($randomInt, $arrayRandom) ) {
        $arrayRandom[] = $randomInt;
    }
}

$result = '';


for ($i = 0; $i < count($arrayRandom) - 1; $i++) { 
    $result .=  $arrayRandom[$i].' - ';

}

$result .= $arrayRandom[count($arrayRandom ) - 1];

?>


<h2> <?php echo $result; ?> </h2>