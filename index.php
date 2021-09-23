<!doctype html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>SUPER SMASH PROF.</title>
</head>

<body>
  <center>
    <h1>SUPER SMASH PROF.</h1>

    <?php
    function chargerClasse(string $classe)
    {
      include $classe . '.php';
    }

    spl_autoload_register('chargerClasse');

    include "conf.php";
    
    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

      $personnagesManager = new PersonnagesManager($db);
      $personnages = $personnagesManager->getList();

      print('<br> Liste des personnages : ');

      foreach ($personnages as $personnages) {
        print('<br>' . $personnages->getNom());
      }
    } catch (PDOException $e) {
      print('<br/>Erreur de connexion : ' . $e->getMessage());
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </center>
</body>

</html>