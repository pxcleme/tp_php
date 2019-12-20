<?php
class Perso{                                                 

    private $_nom;
    private $_vie;
    private $_degat;

public function __construct($Newnom,$Newvie)
    {
    $this->_vie=$Newvie;
    $this->_nom=$Newnom;
    $this->_degat=50;

    }
public function AfficherPersonnage()
    {
    echo  '<p> mon prenom est '.$this->_nom.' est j ai '.$this->_vie. 'HP </p>';
    }

public function Attaque($objectpersonnage)
    {   
    echo "<p>je suis ".$this->_nom." et j'attaque :".$objectpersonnage->getnom().'</p>';
    $this->_vie=$this->_vie-50;
    echo "<p>".$objectpersonnage->getnom()." à maintenant ".$objectpersonnage = $this->_vie." HP ";
    }

public function PrendreDegat()
    {
    $this->_vie = $this->_vie - $degat;
    }
public function getnom()
    {
        return $this->_nom;
    }   
}
?>