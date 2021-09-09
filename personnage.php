<?php
    class Personnage {
        private $_nom = 'Inconnu';
        private $_force = 50;
        private $_degats = 10;
        private $_experience = 0;

        public function parler() {
            print("Je suis un personnage !");
        }

        public function frapper($adversaire) {
            $adversaire -> _degats = $adversaire -> _degats + $this -> _force;
        }

        public function gagnerExperience() {
            $this -> _experience++;
            return $this -> _experience;
        }
    }
?>