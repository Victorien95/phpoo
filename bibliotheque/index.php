<?php

use App\Cnx;

require_once 'includes/init.php';
// PDO est instancié puis retourné
$pdo = Cnx::getInstance();

// PDO est déjà instancié, il est juste retourné
$cnx = Cnx::getInstance();


require 'layout/header.php';
?>
Acceuil

<?php
require 'layout/footer.php';
?>
