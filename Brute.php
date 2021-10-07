<?php
    class Brute extends Personnage
    {
        private $_magie;

        public function frapper(Personnage $persoAFrapper) : Personnage
        {
            $persoAFrapper -> _degats += $this -> _force;

            return $this;
        }
    }
?>