<?php

class Hotel {

    // Argument
    private string $_nom;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;
    private array $_chambres;


    // Constructeur
    public function __construct(string $nom, string $adresse, string $codePostal, string $ville,){
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_chambres = [];

    }

    // Getter et Setter
    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        return $this->_nom = $nom;
    }

    public function getAdresse(){
        return $this->_adresse;
    }

    public function setAdresse($adresse){
        return $this->_adresse = $adresse;
    }

    public function getCodePostale(){
        return $this->_codePostale;
    }

    public function setCodePostale($codePostale){
        return $this->_codePostale = $codePostale;
    }

    public function getVille(){
        return $this->_ville;
    }

    public function setVille($ville){
        return $this->_ville = $ville;
    }

    // toString

    public function __toString(){
        return $this->_nom."</br>";
    }

    // Ajouter Chambre 
    public function addHotel(Chambre $chambres){
        $this->_chambres[] = $chambres;
    }    

}








