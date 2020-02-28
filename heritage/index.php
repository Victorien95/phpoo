<?php

require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';


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
