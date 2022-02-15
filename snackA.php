Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

<?php

$arrayGames = [
    [
        'teamHome' => 'Olimpia Milano',
        'teamAway' => 'Cantù',
        'scoreHome' => 55,
        'scoreAway' => 60
    ],
    [
        'teamHome' => 'Looney Tunes',
        'teamAway' => 'Monstars',
        'scoreHome' => 221,
        'scoreAway' => 220
    ],
    [
        'teamHome' => 'Amagica',
        'teamAway' => 'Alazie',
        'scoreHome' => 80,
        'scoreAway' => 42
    ],
    [
        'teamHome' => 'Palalottomatica',
        'teamAway' => 'Rastrellosettematica',
        'scoreHome' => 123,
        'scoreAway' => 156
    ]
];


$injection = '';

for ($i=0; $i < count($arrayGames) ; $i++) { 
    $injection .= "<p>".$arrayGames[$i]['teamHome']." - ".$arrayGames[$i]['teamAway']." | ".$arrayGames[$i]['scoreHome']."-".$arrayGames[$i]['scoreAway']."</p>";
};

?>

<div>
    <?php echo $injection; ?>    
</div> 