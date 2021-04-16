

<?php

class PersonnageDefault
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    function __construct() 
    {
        $this->_nom = "Loper";
        $this->_prenom = "Dave";
        $this->_age = 18;
        $this->_sexe = "Masculin";
    }

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

    function getAge(){
        return $this->_age;
    }

    function setAge($pAge){
        $this->_age = $pAge;
    }

    function getSexe(){
        return $this->_sexe;
    }

    function setSexe($pSexe){
        $this->_sexe = $pSexe;
    }
}



?>
