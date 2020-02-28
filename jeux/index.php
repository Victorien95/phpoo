<?php
require_once 'Joueur.php';

$joueur1 = new Joueur('Demusset', 'Alfred');
$joueur2 = new Joueur('Hugo', 'Victor');

$joueur1->frapper($joueur2, 'forte');

$joueur2->frapper($joueur1, 'faible');
$joueur1->frapper($joueur1, 'faible');

$joueur1->frapper($joueur2, 'moyenne');
$joueur2->frapper($joueur1, 'forte');

$joueur1->frapper($joueur2, 'forte');
$joueur2->frapper($joueur1, 'forte');

$joueur1->frapper($joueur2, 'forte');

$joueur2->frapper($joueur1, 'faible');
$joueur1->frapper($joueur1, 'faible');

$joueur1->frapper($joueur2, 'moyenne');
$joueur2->frapper($joueur1, 'forte');

$joueur1->frapper($joueur2, 'forte');
$joueur2->frapper($joueur1, 'forte');

