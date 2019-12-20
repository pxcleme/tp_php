<?php
class Perso{                                                 

    private $_nom;
    private $_vie;
    private $_degat;
    private $_id;

    public function __construct($idperso)
    {
        try{
            //execution du code sur la BDD 
            $BDD = new PDO('mysql:host=192.168.65.232; dbname=jeux_cleme; charset=utf8','siteWeb', 'siteWeb');
            $resultat = $BDD->query('SELECT * FROM personnage WHERE id_perso = '.$idperso);
            $resultat = $resultat->fetch();
            
            $this->_nom = $resultat['Nom'];
            $this->_vie =$resultat['vie'];
        
        }
        catch (Exception $erreur)
        {
            echo 'Erreur : '.$erreur->getmessage();
        }
        $this->_id = $idperso;
    }

    public function getnom()
    {
        return $this->_nom;
    }   
    public function getvie()
    {
        return $this->_vie;
    }   
    public function getID()
    {
        return $this->_id;
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

    $BDD = new PDO('mysql:host=192.168.65.232; dbname=jeux_cleme; charset=utf8','siteWeb', 'siteWeb');
    $resultat = $BDD->query('UPDATE * FROM personnage SET `vie`= '.$objectpersonnage = $this->_vie.'WHERE `id_perso` ='.$objectpersonnage = $this->_id);
    }   

public function PrendreDegat()
    {
    $this->_vie = $this->_vie - $degat;
    }
}
?>