<h1>Hotel</h1>

<?php

spl_autoload_register(function ($class_name){
    require_once 'Classes/'. $class_name . '.php';
});

    // Hotel
$hotel1 = new Hotel ("hilton", "10 route de la Gare", "67000", "STRASBOUG");

    // Client
$client1 = new Client ("Galland", "Anthony", "15-02-1991");

    // Chambre
$chambre1 = new Chambre ("12", 3, true, 130, false, $hotel1);
$chambre2 = new Chambre ("02", 2, false, 120, true, $hotel1);

    // Reservation
$reservation1 = new Reservation ($client1, $chambre1, "01-01-2021", "01-01-2021");
$reservation2 = new Reservation ($client1, $chambre2, "05-02-2021", "07-02-2021");    

// echo $hotel1;
// echo $client1;
// echo $chambre1;
// echo $reservation1;

echo $client1->afficherReservation();