<?php
  function chargerClasse(string $classe)
  {
      include $classe . '.php';
  }

  spl_autoload_register('chargerClasse');

  include "conf.php";

  try {
      $db = new PDO($dsn, $user, $password);

      if ($db) {
          print('<br/>Lecture dans la base de données :');
          $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM personnages;');

          while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
              $perso = new Personnage($ligne);
              print('<br/>' . $perso->getNom() . ' a ' . $perso->getForce() . ' de force, ' . $perso->getDegats() . ' de dégâts, ' . $perso->getExperience() . ' d\'expérience et est au niveau ' . $perso->getNiveau());
          }
      }
  } catch (PDOException $e) {
      print('<br/>Erreur de connexion : ' . $e->getMessage());
  }
?>