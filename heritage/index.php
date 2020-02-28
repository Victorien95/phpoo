<?php

require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'Maitre.php';
require_once 'Siamois.php';


// le constructeur avec un paramètre et la méthode getNom() viennent de la classe Animal dont hérite Chat
$chat = new Chat('Hercule');
echo $chat->getNom();

// fatal error: La classe est abstaite
//$animal = new Animal();

$chien = new Chien('Pif');

echo $chat->sePresenter() . '<br>';

echo $chien->sePresenter() . '<br>';

$vic = new Humain();

try {

    $vic->donnerSucre($chat); // erreur de typage

}catch (Error $error){
    echo 'Pas de sucre pour autre chose qu\'un chat<br>';
}

$vic->donnerSucre($chien);
echo '<br>';
$vic->carresser($chat);

var_dump($chat instanceof Chat); // true

// parce que la classe Chat hérite d'animal

var_dump($chat instanceof Animal); // true


$milou = new Chien('Milou');
$tintin = new MaitreChien();
$tintin->carresserChien();

$tintin->setChien($milou);

$liam = new MaitreChien();

// On peut faire aboyer Milou comme ça:
$tintin->carresserChien();
$liam->carresserChien();

// error : $liam->getChien() retourne null
//$liam->getChien()->crier();


$gandalf = new Maitre();
$garfield = new Chat('Garfield');
$gandalf->setAnimal($garfield);

$sauron = new Maitre();
$zeus = new Chien('Zeus');
$sauron->setAnimal($zeus);

echo var_dump($gandalf->getAnimal());
echo var_dump($sauron->getAnimal());

$siamois = new Siamois();

var_dump($siamois instanceof Siamois); // true
// parceque Siamois hérite de Chat:
var_dump($siamois instanceof Chat); // true
// parceque Siamois hérite de Chat qui hérite d'Animal:
var_dump($siamois instanceof Animal); // true


// Méthode surchargée dans Chat:
echo $siamois->sePresenter();

// fatal error : La clase SiamoiAngora ne peut exister car la classe Siamoi dont elle hérite est déclarée finale
// require_once 'Siamois
//require_once 'SiamoisAngora.php';
//angora = new SiamoisAngora();

$siamois->setCouleurYeux('bleu');

$siamois->direCouleurYeux();
$siamois->setLongeurPoil('très long');
$siamois->direLongeurPoil();

// fatal error :  l'attribut est déclaré protégé et n'est pas accessible depuis un objet de la classe
//echo $siamois->longeurPoil;