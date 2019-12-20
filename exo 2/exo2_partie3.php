<?php

class P2{

    private$_nom;
    private$_vie;

public function __construct($Newnom,$Newvie)
{
    $this->_vie=$Newvie;
    $this->_nom=$Newnom;

}
public function AfficherPersonnage(){
    echo  'mon nom est '.$this->_nom.' est j ai '.$this->_vie. 'hp';
}
public function setP2($nom)
{
$this->_nom=$nom;
}


}   
?>