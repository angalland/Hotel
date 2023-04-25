<?php

class Reservation {

    // Argument
    private Client $_client;
    private Chambre $_chambre;
    private string $_dateArrive;
    private string $_dateDepart;

    // Construct
    public function __construct(Client $client, Chambre $chambre, string $dateArrive, string $dateDepart){
        $this->_client = $client;
        $this->_client->addReservation($this);
        $this->_chambre = $chambre;
        $this->_chambre->addReservation($this);
        $this->_dateArrive = $dateArrive;
        $this->_dateDepart = $dateDepart;
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
        return $this->_dateArrive." au ".$this->_dateDepart;
    }
}