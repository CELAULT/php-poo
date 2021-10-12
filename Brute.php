<?php
final class Brute extends Personnage
{
    public function attaquer(Personnage $persoAFrapper): Personnage
    {
        $persoAFrapper->_degats += $this->_force;

        return $this;
    }

    public function insulter()
    {
        print("<br><br>BRUTE : Gnngnngnn !");
    }
}