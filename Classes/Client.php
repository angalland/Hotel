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
        $result =  "<strong>Reservation de $this :</strong></br>";
        $result .= count($this->_reservations)." réservations</br>";
        foreach ($this->_reservations as $reservation){
            $result .= "<strong> hotel : ".$reservation->getChambre()->getHotel()."</strong> ";
            $result .= "/ Chambre ".$reservation->getChambre()." (".$reservation->getChambre()->getNbLit()." lits - ".$reservation->getChambre()->getPrix()." € - "; 
            if ($reservation->getChambre()->getWifi()){
                $result .= "Wifi : oui";
            } else {
                $result .= "Wifi : non";
            };
            $result .=" ) du ".$reservation."</br>"; 
        }
            

          foreach ($this->_reservations as $reservation){
            $result1 = $reservation->dureeSejour() * $reservation->getChambre()->getPrix()."</br>";
            $result1 .= [];
            
        }
        return $result." Prix total : ".array_sum($result1);
    }
}
