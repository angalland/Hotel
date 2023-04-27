<h1>Hotel</h1>
<header>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="Classes/style.css">
</header>
<?php

spl_autoload_register(function ($class_name){
    require_once 'Classes/'. $class_name . '.php';
});

    // Hotel
$hotel1 = new Hotel ("Hilton*****Strasbourg", "10 route de la Gare", "67000", "STRASBOUG");
$hotel2 = new Hotel ("Regent****Paris", "5 place du marché", "75012", "PARIS");

    // Client
$client1 = new Client ("Galland", "Anthony", "15-02-1991");

    // Chambre hilton
$chambre1 = new Chambre ("12", 3,  130, false, $hotel1);
$chambre2 = new Chambre ("02", 2,  120, true, $hotel1);
$chambre3 = new Chambre ("05", 2,  90, true, $hotel1);
$chambre4 = new Chambre ("01", 4,  130, false, $hotel1);
$chambre5 = new Chambre ("03", 3,  100, true, $hotel1);
$chambre6 = new Chambre ("04", 2, 120, false, $hotel1);

    // Chambre Regent
$chambre6 = new Chambre ("Suite Royale", 4, 250, true, $hotel2);

    // Reservation
$reservation1 = new Reservation ($client1, $chambre1, "01-01-2021", "04-01-2021");
$reservation2 = new Reservation ($client1, $chambre2, "05-02-2021", "07-02-2021");
$reservation3 = new Reservation ($client1, $chambre3, "17-07-2021", "25-07-2021"); 
$reservation4 = new Reservation ($client1, $chambre4, "15-09-2021", "16-09-2021");  

$hotel1->infoHotel();
$hotel1->reservationHotel();
$hotel2->reservationHotel();
echo $client1->afficherReservation();


$hotel1->statusChambre();





