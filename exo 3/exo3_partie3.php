<?php

class P2{

    private$_nom;
    private$_vie;

public function __construct($Newnom,$Newvie){
    $this->_vie=$Newvie;
    $this->_nom=$Newnom;

}
public function AfficherPersonnage(){
    echo  '<p> mon nom est '.$this->_nom.' est j ai '.$this->_vie. 'hp </p>';
}
public function setP2($nom){
$this->_nom=$nom;
}


}   
?>
<?php
    class P3{
        private$_nom;
        private$_vie;


public function __construct($NewNom,$NewVie){
    $this->_vie=$NewVie;
    $this->_nom=$NewNom;

}

public function setP3($nom){
$this->_nom=$nom;
}

public function AfficherPersonnage1(){
    echo  '<p> mon nom est '.$this->_nom.' est j ai '.$this->_vie. 'hp </p>';
}
}
?> 