


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
        <?= $this->getAdresse() ?> <?= $this->getCodePostale()?> <?=$this->getVille() ?></br> <!-- On obtient l'adresse, le code postale et la ville de l'hotel -->
        Nombre de chambres : <?=count($this->_chambres) ?>  </br> <!-- Compte le nombre entiers de chambres -->
        <?php
        $reserver = 0;
        foreach ($this->_chambres as $chambre){
            if ($chambre->getReserver()){  // compte le nombre de chambre réservé
                 $reserver++;
            }
        };
        ?>
        Nombre de chambres réservées : <?=$reserver ?></br>
        Nombre de chambres restantes : <?= count($this->_chambres) - $reserver ?> </br></br> <!-- calcule le nombre de chambre restantes -->
       <?php 
    }

    // Rerservation de l'hotel

    public function reservationHotel(){
        ?> <strong>Réservation de l'hôtel <?= $this?> </strong></br>
        <?php
        
            $reserver = 0; 
            foreach ($this->_chambres as $chambre){
                if ($chambre->getReserver()){
                    $reserver++;
                    
                }}
                if ($reserver == 0){
                    ?>
           Aucune réservation !</br></br>
           <?php
       
       
    } else {
    ?><?=$reserver?> RESERVATIONS </br><?php
    }
        foreach ($this->_chambres as $chambre){  // On parcours le tableau chambre
        if ($reservations = $chambre->getReservation()){ // on va chercher le tableau reservation
        foreach ($reservations as $reservation){ // on parcours le tableau reservation
        ?>
        <?= $reservation->getClient()?> -  chambre  <!-- On obtient le nom du client -->
        <?= $reservation->getChambre()?> du -  <!-- on obtient le nom de la chambre-->
        <?= $reservation->getDateArrive()->format('d-m-Y')?> au  <!-- on obtient la date d'arrive -->
        <?= $reservation->getDateDepart()->format('d-m-Y')?> <!-- on obtient la date de départ -->
        <?php 
        }
        } ?></br><?php }
    }

    // Status chambre hotel
    public function statusChambre(){
    ?>
    <strong>Status des chambres de <?= $this ?></strong>
    </br></br>
    <table> 
        <thead>
            <tr>
                <th class="chambre">Chambre</th>
                <th>Prix</th>
                <th>WIFI</th>
                <th>ETAT</th>
            </tr>
        </tead>
        <tbody>
        <?php
        foreach ($this->_chambres as $chambre){?>
            <tr class="ligne">
                <td><?= $chambre->getNomChambre() ?></td>
                <td><?= $chambre->getPrix() ?> €</td>
                <td><?php  
        if ($chambre->getWIfi()){?>
            <i class="fa-solid fa-wifi"></i><?php
        } ?>
                </td>
                <td><?php
        if (!$chambre->getReserver()){?>
                <div class="disponible">disponible<div>
                <?php
        } else {?>
                <div class="reserver">Réservée</div>
                <?php
        }?>
                </td>
                        
            </tr><?php
        }
    }
}

    
        
        
      

