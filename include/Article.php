<?php

class Article extends Database
{
    
    public function getArticles()
    {
        $sql = "SELECT idArticle, titre, LEFT(description,250) as description, DATE_FORMAT(datePub, '%d %M, %Y') as datePub, image, nom FROM article, categorie WHERE article.idCat = categorie.idCat ORDER BY idArticle DESC LIMIT 3, 11";
        return $this->createQuery($sql);
    }

    public function getLastArticles()
    {
        $sql = "SELECT idArticle, titre, DATE_FORMAT(datePub, '%d %M, %Y') as datePub, image, nom FROM article, categorie WHERE article.idCat = categorie.idCat ORDER BY idArticle DESC LIMIT 1, 2";
        return $this->createQuery($sql);
    }

    public function getPrincipalArticle()
    {
        $sql = "SELECT idArticle, titre, DATE_FORMAT(datePub, '%d %M, %Y') as datePub, image, nom FROM article, categorie WHERE article.idCat = categorie.idCat ORDER BY idArticle DESC LIMIT 1";
        return $this->createQuery($sql);
    }

    public function getDetailArticle($idArticle)
    {
        $sql = "SELECT idArticle, titre, description, DATE_FORMAT(datePub, '%d %M, %Y') as datePub, image, nom FROM article, categorie WHERE article.idCat = categorie.idCat AND idArticle = ?";
        return $this->createQuery($sql, [$idArticle]);
    }

    
    public function getArticleParCategorie($idCategorie)
    {
        $sql = "SELECT idArticle, titre, description, DATE_FORMAT(datePub, '%d %M, %Y') as datePub, image, nom FROM article, categorie WHERE article.idCat = categorie.idCat AND categorie.idCat = ?";
        return $this->createQuery($sql, [$idCategorie]);
    }

    public function getNomCategorie($idCategorie)
    {
        $sql = "SELECT idCat, nom FROM categorie  WHERE idCat = ?";
        return $this->createQuery($sql, [$idCategorie]);
    }

    
    public function addArticle(Parameter $post)
    {
        $sql = 'INSERT INTO article (titre, description, datePub, idCat, iduser) VALUES (?, ?, ?, ?,1)';
        $this->createQuery($sql, [$post->get('titre'), $post->get('description'), $post->get('datePub'), $post->get('idCat')]);
    }


}