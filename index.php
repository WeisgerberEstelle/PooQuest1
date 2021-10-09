<?php
    require 'Bicycle.php';
    require 'Car.php';

     // Instanciation d'un nouvel objet $bike
    $bike = new Bicycle("blue");
    $bike->setCurrentSpeed(0);
    var_dump($bike);

    echo $bike->forward();
    echo '<br> Vitesse de bike : ' . $bike->getCurrentSpeed() . "km/h" . "<br>";
    echo  $bike->brake();
    echo  '<br> Vitesse de bike : ' . $bike->getCurrentSpeed() . "km/h" . "<br>";


    // Instanciation d'un nouvel objet $rockrider
    $rockrider = new Bicycle("yellow");

    var_dump($rockrider);
    echo $rockrider->forward();
    echo '<br> Vitesse de rockrider: ' . $rockrider->getCurrentSpeed() . "km/h" . "<br>";
    echo  $rockrider->brake();
    echo '<br> Vitesse de rockrider: ' . $rockrider->getCurrentSpeed() . "km/h" . "<br>";


    // Instanciation d'un nouvel objet $tornado
    $tornado = new Bicycle("red");
    var_dump($tornado);

    echo $tornado->forward();
    echo '<br> Vitesse de Tornado: ' . $tornado->getCurrentSpeed() . "km/h" . "<br>";
    echo  $tornado->brake();
    echo '<br> Vitesse de Tornado: ' . $tornado->getCurrentSpeed() . "km/h" . "<br>";

    
    // Instanciation d'un nouvel objet car $citroen
    $citroen = new car('red', 5, 'gasoil');
    var_dump($citroen);
    
    echo $citroen->forward();
    echo '<br> Vitesse de Citroen: ' . $citroen->getCurrentSpeed() . "km/h" . "<br>";
    echo  $citroen->brake();
    echo '<br> Vitesse de Tornado: ' . $citroen->getCurrentSpeed() . "km/h" . "<br>";

    // Instanciation d'un nouvel objet car $mercedes
    $mercedes = new car('White', 4, 'gasoil');
    var_dump($mercedes);
    
    echo $mercedes->forward();
    echo '<br> Vitesse de Mercedes: ' . $mercedes->getCurrentSpeed() . "km/h" . "<br>";
    echo  $mercedes->brake();
    echo '<br> Vitesse de Mercedes: ' . $mercedes->getCurrentSpeed() . "km/h" . "<br>";

?>
