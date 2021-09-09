<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Jeu de Combat</title>
    </head>

    <body>
        <center>
            <?php
                include "Personnage.php";

                print("<h1>SUPER SMASH PROF ULTIMATE</h1><br><br><br>");

                $perso1 = new Personnage('HOMMET');
                $perso1 -> setExperience(15);

                $perso2 = new Personnage('LECOUVREUR', 60, 0);
                $perso2 -> setExperience(1);

                $perso1 -> frapper($perso2);
                $perso2 -> frapper($perso1);

                print("<br>Dégâts du J1 = " . $perso1 -> getDegats());
                print("<br>Dégâts du J2 = " . $perso2 -> getDegats());

            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </center>
    </body>
</html>