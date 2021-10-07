<?php
    class Magicien extends Personnage
    {
        private $_magie;

        public function frapper(Personnage $persoAFrapper) : Personnage
        {
            $persoAFrapper -> _degats += $this -> _magie;

            return $this;
        }
    }
?>