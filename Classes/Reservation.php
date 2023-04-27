<?php

class Reservation {

    // Argument
    private Client $_client;
    private Chambre $_chambre;
    private DateTime $_dateArrive;
    private DateTime $_dateDepart;

    // Construct
    public function __construct(Client $client, Chambre $chambre, string $dateArrive, string $dateDepart){
        $this->_client = $client;
        $this->_client->addReservation($this);
        $this->_chambre = $chambre;
        $this->_chambre->addReservation($this);
        $this->_dateArrive = new DateTime($dateArrive);
        $this->_dateDepart = new DateTime($dateDepart);
    }

    // Getter et Setter
    public function getClient() {
        return $this->_client;
    }

    public function setClient($client) {
        return $this->_client = $client;
    }

    public function getChambre() {
        return $this->_chambre;
    }

    public function setChambre($chambre) {
        return $this->_chambre = $chambre;
    }

    public function getDateArrive() {
        return $this->_dateArrive;
    }

    public function setDateArrive($dateArrive) {
        return $this->_dateArrive = $dateArrive;
    }

    public function getDateDepart() {
        return $this->_dateDepart;
    }

    public function setDateDepart($dateDepart) {
        return $this->_dateDepart = $dateDepart;
    }

    public function __toString() {
        return $this->getDateArrive()->format('d-m-Y')." au ".$this->getDateDepart()->format('d-m-Y'); // renvoie la date d'arrivée et la date de départ
    }

    // Calcule duree du séjour
    public function dureeSejour(){
        $diff = $this->getDateDepart()->diff($this->getDateArrive()); // fait la différence entre la date de départ et la date d'arrivé
        return $diff->d;
    }

}