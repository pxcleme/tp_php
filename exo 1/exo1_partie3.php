<?php

class P1{

    private$_nom;
    private$_prenom;


public function AfficherPersonnage(){
    echo  'mon nom est '.$this->_nom.' et mon prenom est '.$this->_prenom.''; 
}
public function setP1($nom,$prenom){
$this->_nom=$nom;
$this->_prenom=$prenom;
}


}   //fin de la class P1
?>