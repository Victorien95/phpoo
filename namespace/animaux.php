<?php

use Animal\Continent\Afrique\Elephant as ElephantAfrique;
use Animal\Continent\Afrique\Gazelle;
use Animal\Continent\Asie\Elephant as ElephantAsie;
use Animal\Elephant as ElephantInterface;
use Animal\Fourmi;

require_once 'autoload.php';

function afficheTailleOreille(ElephantInterface $elephant)
{
    echo 'Un éléphant avec de ' . $elephant->getTailleOreilles() . ' oreilles';
}

$elephantAfrique = new ElephantAfrique();
$elephantAsie = new ElephantAsie();

afficheTailleOreille($elephantAsie);

$gazelle = new Gazelle();
echo '<br>';
$gazelle->voirElephant();
$fourmi = new Fourmi();
echo '<br>';
$fourmi->voirElephantAfrique();
echo '<br>';
$fourmi->voirElephant('afrique');
echo '<br>';
$fourmi->voirElephant('asie');
echo '<br>';
$fourmi->voirElephant('europe');
echo '<br>';
// ::class est disponible pour toutes les classes
// Retourne le nom complet de la classe sous forme de chaîne de caractères
echo Gazelle::class;