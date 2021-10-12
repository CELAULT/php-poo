<?php
final class Archer extends Personnage
{
    public function attaquer(Personnage $persoAFrapper): Personnage
    {
        $persoAFrapper->_degats += $this->_force;

        return $this;
    }

    public function insulter()
    {
        print("<br><br>ARCHER : T'as du fromage dans les chaussettes ou quoi !");
    }
}