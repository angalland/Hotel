<?php

class Client {

    // Argument
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private array $_reservations;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_reservations = [];
    }

    // Getter et setter

    public function getNom() : string {
        return $this->_nom;
    }

    public function setNom($nom) : string {
        return $this->_nom = $nom;
    }
    
    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function setPrenom($prenom) : string {
        return $this->_prenom = $prenom;
    }
    
    public function getDateNaissance() : DateTime {
        return $this->_dateNaissance;
    }

    public function setDateNaissance($dateNaissance) : DateTime {
        return $this->_dateNaissance = $dateNaissance;
    }
    
    // toString

    public function __toString() : string {
        return $this->_prenom." ".$this->_nom;
    }

    // Ajouter reservation
    public function addReservation(Reservation $reservations) {
        $this->_reservations[] = $reservations;
    }

    // Lister les reservations du client
    public function afficherReservation(){
        $result =  "Le client $this a réservé :</br>";
        foreach ($this->_reservations as $reservation){
            $result .= "La chambre ".$reservation->getChambre()." du ".$reservation."</br>"; 
        }
        return $result."</br>";
    }
}
