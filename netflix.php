<?php 

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Vickie\Controllers\NetflixController;

$infos = new NetflixController();

print_r(json_encode($infos->randomRegister()));
?>