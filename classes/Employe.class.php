<?php

class Employe
{
    // proprietes
    private $_nom;
    public $_prenom;
    public $_DateEmbauche;
    public $_fonction;
    public $_serviceEmploye;

      // methods
    function getNom(){
        return $this->_nom;
    }

    function setNom($pNom){
        $this->_nom = $pNom;
    }

    function getPrenom(){
        return $this->_prenom;
    }

    function setPrenom($pPrenom){
        $this->_prenom = $pPrenom;
    }

    function getDateEmbauche(){
        return $this->_DateEmbauche;
    }

    function setDateEmbauche($pDateEmbauche){
        $this->_DateEmbauche = $pDateEmbauche;
    }

    function getFonction(){
        return $this->_fonction;
    }

    function setFonction($pFonction){
        $this->_fonction = $pFonction;
    }

}
