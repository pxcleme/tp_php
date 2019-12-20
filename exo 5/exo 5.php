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
            echo "SELECT * FROM jeux_cleme WHERE id_personnage = '".$idperso."' ";
            $resultat = $BDD->query("SELECT * FROM personnage WHERE id_perso = '".$idperso."' ");
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
public function AfficherPersonnage()    // affiche les deux personnages
    {
    echo  '<p> mon prenom est '.$this->_nom.' est j ai '.$this->_vie. 'HP </p>';
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
}
?>