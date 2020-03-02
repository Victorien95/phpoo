<?php
require_once 'Volume.php';
require_once 'Texture.php';
require_once 'Cube.php';
require_once 'Brique.php';
require_once 'De.php';

$cube = new Cube();

function getFormeVolume(Volume $volume)
{
    echo 'La forme du volume est: ' . $volume->getForme() . '<br>';
}
function getCouleurTexture(Texture $texture)
{
    echo 'La couleur de la texture est : ' . $texture->getCouleur();
}

// Cube implémente l'interface Volume donc $cube est instance de Volume
var_dump($cube instanceof Volume); // true
var_dump($cube instanceof Cube); // true

getFormeVolume($cube);

$brique = new Brique();

var_dump($brique instanceof Volume); // true
var_dump($brique instanceof Texture); // true

getFormeVolume($brique);
getCouleurTexture($brique);

$de = new De('plastique', 'rouge');

var_dump($de instanceof De); // true
// parce que De hérite de Cube :
var_dump($de instanceof Cube); // true
// parce que De implémente Texture :
var_dump($de instanceof Texture); // true
// parce que Cube implémente Volume :
var_dump($de instanceof Volume); // true

getFormeVolume($de);
getCouleurTexture($de);