<?php
final class MagicienVoleur extends Personnage implements Voleur
{
    public function extraireDeLaPoche(Personnage $advairsaire, int $montantExtrait)
    {
        $advairsaire->setProche($advairsaire->getPoche() - $montantExtrait);
    }

    public function courir()
    {
    }

    public function attaquer(Personnage $persoAFrapper): Personnage
    {
        return $this;
    }
}