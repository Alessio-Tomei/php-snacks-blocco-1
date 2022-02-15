Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

<?php

$name = $_GET["n"];
$email = $_GET["e"];
$age = $_GET["a"];

$result = 'Accesso negato';

$emailCheck = false;

if (stripos($email, '@', 1) && strripos($email, '.', 3) > stripos($email, '@', 1)) {
    $emailCheck = true;
}

if (strlen($name) > 3  && is_numeric($age) && $emailCheck) {
    $result = 'Accesso riuscito';
}

?>

<?php
echo "<p>$name</p><p>$email</p><p>$age</p>";
?>

<h2> <?php echo $result; ?> </h2>