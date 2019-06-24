<?php

class Categorie extends Database
{
    public function getCategorie()
    {
        $sql = "SELECT idCat, nom FROM categorie";
        return $this->createQuery($sql);
    }

    
}