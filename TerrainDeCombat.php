<?php
class TerrainDeCombat
{
    public function lancerUnCombat(Personnage $perso1, Personnage $perso2, Personnage $perso3)
    {
        $perso1->attaquer($perso2);
        $perso1->attaquer($perso3);
        $perso2->attaquer($perso1);
        $perso2->attaquer($perso3);
        $perso3->attaquer($perso1);
        $perso3->attaquer($perso2);

        if($perso1 instanceof MagicienVoleur)
        {
            print("<br>" . $perso1->getNom() . "est un voleur");

            $perso1->extraireDeLaPoche($perso2);
        }

        print("<br>" . $perso1);
        print("<br>" . $perso2);
        print("<br>" . $perso3);

        $perso1->insulter();
        $perso2->insulter();
        $perso3->insulter();
    }
}