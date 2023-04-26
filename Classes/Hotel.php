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
        ?>
        <strong><?= $this ?></strong></br>
        <?= $this->getAdresse() ?> <?= $this->getCodePostale()?> <?=$this->getVille() ?></br>
        Nombre de chambres : <?=count($this->_chambres) ?>  </br>
        
        <?php
        $reserver = 0;
        foreach ($this->_chambres as $chambre){
            if ($chambre->getReserver()){
                 $reserver++;
            }
        };
        ?>
        Nombre de chambres réservées : <?=$reserver ?></br>
        Nombre de chambres restantes : <?= count($this->_chambres) - $reserver ?> </br></br>
       <?php 
    }

    // Rerservation de l'hotel

    public function reservationHotel(){
        ?> <strong>Réservation de l'hôtel <?= $this?> </strong></br>
        <?php
        foreach ($this->_chambres as $chambre){ // calcule le nombre de chambre reserver
            $reserver = 0;
            foreach ($this->_chambres as $chambre){
                if ($chambre->getReserver()){
                     $reserver++;
                } 
            }}
            ?><?=$reserver?> RESERVATIONS </br><?php
            foreach ($this->_chambres as $chambre){  // On parcours le tableau chambre
                $reservations = $chambre->getReservation(); // on va chercher le tableau reservation
                foreach ($reservations as $reservation){ // on parcours le tableau reservation
                    ?>
                    <?= $reservation->getClient()?> -  chambre  <!-- On obtient le nom du client -->
                    <?= $reservation->getChambre()?> du -  <!-- on obtient le nom de la chambre-->
                    <?= $reservation->getDateArrive()?> au  <!-- on obtient la date d'arrive -->
                    <?= $reservation->getDateDepart()?></br>

                    <?php
                }
               
            }
              
            ?>
            </br><?php
          
    
    } 
            


}
