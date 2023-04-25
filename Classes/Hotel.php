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
        return $this->_codePostal;
    }

    public function setCodePostale($codePostal){
        return $this->_codePostal = $codePostal;
    }

    public function getVille(){
        return $this->_ville;
    }

    public function setVille($ville){
        return $this->_ville = $ville;
    }

    // toString

    public function __toString(){
        return $this->_nom;
    }

    // Ajouter Chambre 
    public function addHotel(Chambre $chambres){
        $this->_chambres[] = $chambres;
    }
    
    // Information Hotel
    public function infoHotel(){
        $result = "<strong>$this</strong></br>";
        $result .= $this->getAdresse(). " ".$this->getCodePostale()." ".$this->getVille()."</br>";
        $result .= "Nombre de chambres : ".count($this->_chambres)."</br>";
        foreach ($this->_chambres as $chambre){
            if ($chambre->getReserver([2]) == true){
                 $result2 = count($this->_chambres);
            }
        };
        $result .= "Nombre de chambres réservées ".$result2."</br>";
        return $result;    
    }


}








