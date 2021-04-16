<?php

include_once "vehicule.class.php";

class Voiture extends Vehicule
{
    private $_nbrePortes;

    public function AfficherProprietes(){
        var_dump($this->_marque);
        var_dump($this->_modele);
        var_dump($this->_immatriculation);
    }
    public function AfficherProprietes2($p_marque,$p_model,$p_immat){
        if($p_marque == "PEUGEOT"){
            $this->_marque = "RENAULT";
        }
        $this->_marque = $p_marque;
        $this->_modele = $p_model;
        $this->_immatriculation = $p_immat;
        var_dump($this->_marque);
        var_dump($this->_modele);
        var_dump($this->_immatriculation);
    }
}


?>