<?php
class Personnage
{
    private $_id = 0;
    private $_nom = 'Inconnu';
    private $_niveau = 1;
    private $_force = 100;
    private $_degats = 10;
    private $_experience = 0;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 20;
    const FORCE_FORTE = 20;

    public function __construct($nom, $force = 50, $degats = 1)
    {
        $this->setNom($nom);
        $this->setForce($force);
        $this->setDegats($degats);
        $this->setExperience(1);

        print('<br>Le personnage "' . $nom . '" est crée !');
    }

    public function __toString()
    {
        return $this->getNom();
    }

    public function setNom($nom)
    {
        if (!is_string($nom)) {
            trigger_error("Le nom d'un personnage doit être un texte", E_USER_ERROR);
            return;
        }
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setForce($force)
    {
        if (!is_int($force)) {
            trigger_error("La force d'un personnage doit être un nombre entier", E_USER_ERROR);
            return;
        }

        if ($force > 100) {
            trigger_error("La force d'un personnage ne peut dépasser 100", E_USER_ERROR);
            return;
        }

        $this->_force = $force;
    }

    public function getForce($force)
    {
        return $this->_force;
    }

    public function setDegats($degats)
    {
        if (!is_int($degats)) {
            trigger_error("La force d'un personnage doit être un nombre entier", E_USER_ERROR);
            return;
        }

        $this->_degats = $degats;
    }

    public function getDegats()
    {
        return $this->_degats;
    }

    public function setExperience($experience)
    {
        if (!is_int($experience)) {
            trigger_error("L'experience d'un personnage doit être un nombre entier", E_USER_ERROR);
            return;
        }

        if ($experience > 100) {
            trigger_error("L'experience d'un personnage ne peut dépasser 100", E_USER_ERROR);
            return;
        }

        $this->_experience = $experience;
    }

    public function getExperience($experience)
    {
        return $this->_experience;
    }

    public function parler()
    {
        print("Je suis un personnage !");
    }

    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
        $this->gagnerExperience();

        print('<br/>' . $persoAFrapper->getNom() . ' a été frappé par ' . $this . ' -> Dégats de ' . $persoAFrapper . ' = ' . $persoAFrapper->getDegats());
    }

    public function gagnerExperience()
    {
        $this->_experience++;
    }
}
