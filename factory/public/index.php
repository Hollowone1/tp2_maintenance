<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\Transport;

// Exemple d'utilisation de la factory en fonction de la distance et du poids transporté
$vehicle = Transport::createVehicle(15, 10); // Utilisation d'un véhicule
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";

$vehicle = Transport::createVehicle(25, 15); // Utilisation d'une voiture
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";

$vehicle = Transport::createVehicle(25, 150); // Utilisation d'une voiture
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";

$vehicle = Transport::createVehicle(25, 250); // Utilisation d'un camion
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";