<?php
  include 'header.php';

  try
  {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $personnagesManager = new PersonnagesManager($db);
    $personnages = $personnagesManager->getList();

    print('<br/>Liste des personnages : ');

    foreach ($personnages as $personnage)
    {
      print('<br/><a target="_blank" href="personnage_view.php?id=' . $personnage->getId() . '">'. $personnage->getNom() . '</a>');
    }

  }
  
  catch (PDOException $e)
  {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
  }
?>