<?php

class Chambre {

    // Argument
    private string $_nomChambre;
    private int $_nbLit;
    private int $_prix;
    private bool $_wifi;
    public array $_reservations;
    private Hotel $_hotel;
    private bool $_reserver; 

    // Construct 
    public function __construct(string $nomChambre, int $nbLit, /*bool $reserver,*/ int $prix, bool $wifi, Hotel $hotel){
        $this->_nomChambre = $nomChambre;
        $this->_nbLit = $nbLit;
        /*$this->_reserver = $reserver;*/
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_reservations = [];
        $this->_hotel = $hotel;
        $this->_hotel->addHotel($this);
        $this->_reserver = false;
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

    public function getReserver(){
        return $this->_reserver;
    }

    public function setReserver ($reserver){
        return $this->_reserver = $reserver;
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

    public function getHotel(){
        return $this->_hotel;
    }

    public function setHotel($hotel) {
        return $this->_hotel = $hotel;
    }

    public function getReservation(){
        return $this->_reservations;
    }

    public function setReservation($reservation) {
        return $this->_reservations = $reservation;
    }

    // toString

    public function __toString(){
        return $this->_nomChambre;
    }

    // Ajouter reservation
    public function addReservation(Reservation $reservation) {
        if (!$this->getReserver()) {
            $this->_reservations[] = $reservation;
            return $this->setReserver(true);
        }
        else {
            return false;
        }
    }

    // afficher Hotel
    public function afficherHotel($_hotel){
        return $_hotel->getNom();
    }


  

}