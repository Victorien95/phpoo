<?php
require_once 'Commande.php';

// Opérateur de résolution de portée :: pour accéder à la constante définie dans la classe
echo Commande::TAUX_TVA;
echo '<br>';
echo Commande::$defautStatut;

$commande = new Commande();


echo $commande->getStatut();

// fatal error :  l'attribut est privé
//echo $commande::$nbCommandes;

echo '<br>';
echo Commande::getNbCommandes();
echo '<br>';
$commande2 = new Commande();
echo Commande::getNbCommandes();

//fatal error, cf le contrôle dans le setter
//$commande->setStatut('Délivré');
