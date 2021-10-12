<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="css.css" rel="stylesheet">

  <title>SSPU</title>
</head>

<body>
  <center>
  <br><h1>SUPER SMASH PROF. ULTIMATE</h1>

    <?php
include 'header.php';

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    print('<br><br><br><h3>Liste des Personnages</h3>');

    echo "<h5>";

    $unMagicien = new Magicien(
        [
            'id' => 1, 'nom' => 'HOMMET', 'force' => 20,
        ]
    );

    print("<br>" . $unMagicien->getNom());

    $unArcher = new Archer(
        [
            'id' => 2, 'nom' => 'BOUQUET', 'force' => 20,
        ]
    );

    print("<br>" . $unArcher->getNom());

    $uneBrute = new Brute(
        [
            'id' => 3, 'nom' => 'DEBROISE', 'force' => 20,
        ]
    );

    print("<br>" . $uneBrute->getNom());

    $combat = new TerrainDeCombat();
    $combat->lancerUnCombat($unMagicien, $unArcher, $uneBrute);

    $personnagesManager = new PersonnagesManager($db);
    $personnages = $personnagesManager->getList();

    foreach ($personnages as $personnage) {
        print('<br/><a target="_blank" href="personnage_view.php?id=' . $personnage->getId() . '">' . $personnage->getNom() . '</a>');
    }
} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}

echo "</h5>";
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </center>
</body>

</html>