<?php

class Chambre {

    // Argument
    private string $_nomChambre;
    private int $_nbLit;
    private bool $_reserver; 
    private int $_prix;
    private bool $_wifi;
    private array $_reservations;
    private Hotel $_hotel;

    // Construct 
    public function __construct(string $nomChambre, int $nbLit, bool $reserver, int $prix, bool $wifi, Hotel $hotel){
        $this->_nomChambre = $nomChambre;
        $this->_nbLit = $nbLit;
        $this->_reserver = $reserver;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_reservations = [];
        $this->_hotel = $hotel;
        $this->_hotel->addHotel($this);
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

    // toString

    public function __toString(){
        return $this->_nomChambre;
    }

    // Ajouter reservation
    public function addReservation(Reservation $reservations) {
    $this->_reservations[] = $reservations;
    }


}