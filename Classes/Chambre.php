<?php

class Chambre {

    // Argument
    private string $_nomChambre;
    private int $_nbLit;
    private bool $_reservation; 
    private int $_prix;
    private bool $_wifi;
    private array $_chambres;

    // Construct 
    public function __construct(string $nomChambre, int $nbLit, bool $reservation, int $prix, bool $wifi){
        $this->_nomChambre = $nomChambre;
        $this->_nbLit = $nbLit;
        $this->_reservation = $reservation;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_chambres = [];
    }

    // Getter et Setter

    public function getNomChambre(){
        return $this->_nomChambre;
    }

    public function setNomChambre ($nomChambre){
        return $this->_nomChambre = $nomChambre;
    }

    public function getNbLit() {
        return $this->_nbLit;
    }

    public function setNbLit ($nbLit){
        return $this->_nbLit = $nbLit;
    }

    public function getReservation(){
        return $this->_reservation;
    }

    public function setReservation ($reservation){
        return $this->_reservation = $reservation;
    }

    public function getPrix(){
        return $this->_prix;
    }

    public function setPrix ($prix){
        return $this->_prix = $prix;
    }

    public function getWifi(){
        return $this->_wifi;
    }

    public function setWifi ($wifi){
        return $this->_wifi = $wifi;
    }

    // toString

    public function __toString(){
        return $this->_nomChambre."</br>";
    }

    // Ajouter reservation
    public function addReservation() {
    $this->_reservations[] = $reservations;
    }
}