<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class Transport {
    public static function createVehicle($distance, $weight) {
        if ($distance < 20) {
            return new Bicycle(0.05, 'muscle');
        } elseif ($distance >= 20 && $weight < 20) {
            return new Car(0.1, 'petrol');
        } elseif ($distance >= 20 && $weight >= 20 && $weight < 200) {
            return new Car(0.1, 'petrol');
        } else {
            return new Truck(0.2, 'diesel');
        }
    }
}