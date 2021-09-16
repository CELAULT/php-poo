<?php
  function chargerClasse(string $classe)
  {
      include $classe . '.php';
  }

  spl_autoload_register('chargerClasse');

  print("Pour info, la force petite = " . Personnage::FORCE_PETITE . "<br/>");
  print("Pour info, la force moyenne = " . Personnage::FORCE_MOYENNE . "<br/>");
  print("Pour info, la force grande = " . Personnage::FORCE_GRANDE . "<br/>");
  print("<h1>Jeu de combat</h1>");

  $perso1 = new Personnage('Mario');
  Personnage::parler();

  $perso2 = new Personnage("Lara", Personnage::FORCE_MOYENNE, 0);
  Personnage::parler();

  $perso1->frapper($perso2);
  $perso2->frapper($perso1);

  print("<br/><br/>Bilan :");
  print($perso1);
  print($perso2);
?>