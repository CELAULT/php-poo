<?php
    class Personnage {
        private $_nom = 'Inconnu';
        private $_force = 0;
        private $_degats = 0;
        private $_experience = 0;

        public function definirForce($force) {
            $this -> _force = $force;
        }

        public function definirDegats($_degats) {
            $this -> _degats = $_degats;
        }

        public function afficherDegats() {
            return $this -> _degats;
        }

        public function definirExperience($_experience) {
            $this -> _experience = $_experience;
        }

        public function parler() {
            print("Je suis un personnage !");
        }

        public function frapper($adversaire) {
            $adversaire -> _degats = $adversaire -> _degats + $this -> _force;
            $this -> gagnerExperience();
        }

        public function gagnerExperience() {
            $this -> _experience++;
        }

        public function afficherExperience() {
            return $this -> _experience;
        }
    }
?>