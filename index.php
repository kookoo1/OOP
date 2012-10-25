<?php
// de fouten op de site plaatsen
ini_set('display_errors', 1);
error_reporting(E_ALL);
// require the needed objects
require_once 'includes/Vehicle.php';
?>


<!doctype html>
<html>
    
    <head>
        <title>
            Vehicle
        </title>
        
    </head>
    <body>
        
    <?php

        // instantiate object $car
        $car = new Vehicle();
        
        $car->setBrand('Porsche');
        $car->setShape('coupé');
        $car->setColor('white');
        $car->setNumDoors(2);
        $car->setPrice(100000);

        echo $car->showPrice().'euro<br />';
        echo $car->numDoors() . '<br />';
        echo $car->drive() . '<br />';



    ?>
        
        
    </body>
    
    
    
</html>

