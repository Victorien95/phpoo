<?php

/*
 * Le "use" permet d'appeler la classe par son nom court (sans le namespace) dans le reste du fichier)
 */
use Database\Cnx;
use Database\Postgresql\Adapter;

// Comme on utilise 2 classes dont le nom court est Cnx, on alias l'une des deux
use Smtp\Cnx as MailCnx;

require_once 'Database/Cnx.php';
require_once 'Smtp/Cnx.php';
require_once 'Database/Postgresql/Adapter.php';

$cnx = new Cnx();
$cnx->connect();

$pgAdaptateur = new Adapter();

$smtpCnx = new MailCnx();