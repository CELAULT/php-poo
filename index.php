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
                include "personnage.php";

                print("<h1>Jeu de Combat</h1>");

                $perso1 = new Personnage();
                $perso2 = new Personnage();

                $perso1 -> parler();
                $perso1 -> gagnerExperience();

                $perso1 -> frapper($perso2);
            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </center>
    </body>
</html>