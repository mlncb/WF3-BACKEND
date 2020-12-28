<!DOCTYPE html>
<html>
<body>

<h1>Exercice 1 de PHP</h1>


<h2>Exemple a)</h2>

<?php
    echo"Hello World !";
?>

<h2>Exemple b)</h2>

<?php 
    $textDuParagraphe = "Hello World!";
    $entier = 7;
    $decimal = 10.5; 
    $x = "3"; 
    $y = 4;
    $z = 5;

    define("VITESSE_MAX", 300000);
    define("AGE_LIMITE", 14);

    // echo $textDuParagraphe;
    // echo $entier;
    // echo $decimal;

    //echo$VITESSE_MAX; est une erreur car ce n'est PAS une VARIABLE mais une CONSTANTE 
    echo VITESSE_MAX;
    echo " ";
    echo constant("VITESSE_MAX");
?>

</body>
</html>