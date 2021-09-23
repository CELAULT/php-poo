<?php
class PersonnagesManager
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db): PersonnagesManager
    {
        $this->_db = $db;

        return $this;
    }

    public function add(Personnage $perso): Personnage
    {
    }

    public function delete(Personnage $perso): bool
    {
    }

    public function getOne(int $id)
    {
    }

    public function getList(): array
    {
        $listeDePersonnages = array();
        $request = $this->_db->query('SELECT id, nom, `force`, degats, niveau, experience FROM personnages;');

        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $perso = new Personnage($ligne);
            $listeDePersonnages[] = $perso;
        }

        return $listeDePersonnages;
    }

    public function update(Personnage $perso): bool
    {
    }
}