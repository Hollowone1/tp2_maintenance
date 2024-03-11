<?php
require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques



use App\Config;

$config = Config::getInstance();
$value = $config->getValue("db");
var_dump($value);

$config2 = Config::getInstance();
var_dump($config === $config2); 
