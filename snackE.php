Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

<?php


$classe = [
    [
        'nome' => 'Daniele',
        'cognome' => 'Silla',
        'voti' => [8, 7, 6, 4, 3]
    ],
    [
        'nome' => 'Pippo',
        'cognome' => 'Yoho',
        'voti' => [8, 7, 9, 8, 10]
    ],
    [
        'nome' => 'Pluto',
        'cognome' => 'Cane',
        'voti' => [8, 7, 5, 4 ,6]
    ],
    [
        'nome' => 'Dolly',
        'cognome' => 'Pecora',
        'voti' => [8, 7, 5, 5, 5]
    ],
];

$injection = '';

for ($i = 0; $i < count($classe); $i++) { 
    $tempString = '';
    // $tempString .= $classe[$i]['nome']." ".$classe[$i]['cognome']." | Media: ";
    $tempString .= "{$classe[$i]['nome']} {$classe[$i]['cognome']} | Media: ";


    $tempNumb = array_sum($classe[$i]['voti']) / count($classe[$i]['voti']);
    $tempString .= $tempNumb;
    
    $injection .= "<p>$tempString</p>";
}

?>

<div>
    <?php echo $injection; ?>    
</div> 

