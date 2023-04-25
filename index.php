<h1>Hotel</h1>

<?php

spl_autoload_register(function ($class_name){
    require_once 'Classes/'. $class_name . '.php';
});

$hotel1 = new Hotel ("hilton", "10 route de la Gare", "67000", "STRASBOUG");

echo $hotel1;