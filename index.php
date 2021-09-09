<?php
    include("personnage.php");
    
    print("<h1>Jeu de Combat</h1>");

    $perso = new Personnage();
    $perso -> parler();
    $perso -> _experience = $perso -> _experience + 1;
?>