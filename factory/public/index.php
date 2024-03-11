<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\Transport;

$vehicle = Transport::createVehicle(15, 10); 
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";

$vehicle = Transport::createVehicle(25, 15); 
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";

$vehicle = Transport::createVehicle(25, 150); 
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";

$vehicle = Transport::createVehicle(25, 250); 
echo "Vehicle: Cost per km = {$vehicle->getCostPerKm()}, Fuel type = {$vehicle->getFuelType()} <br>";