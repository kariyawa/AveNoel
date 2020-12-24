<?php
    require 'vendor/autoload.php'; //tous les fichiers sont préchargés une première fois
    use App\src\config\Router;
//define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME'] )); //chemin vers le serveur


$router= new Router;
$router -> loadRoutes();

?>
