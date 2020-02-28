<?php
require_once 'Vehicule.php';
require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';

/*
 * Créer une classe abstraite Vehicule
 * et 2 classes qui en héritent : Moto et Voiture
 * qui doit gérer :
 * - une vitesse max
 * - un type de carburant (essence ou diesel)
 * - un nombre de roues (lié au type de véhicule)
 * - une contenance de réservoir
 * - un contenu du réservoir (la qté d'essence dedans)
 * - ajouter un constructeur
 * Instancier un véhicule de chaque type
 *
 * Ajouter la vitesse, par défaut 0
 * Implémenter une méthode accélérer avec un paramètre de combien de km/h
 * Gérer qu'on ne peut pas accélerer au delà de la vitesse max
 *
 *
 *  * Créer une classe Pompe
 * - un type de carburant (essence ou diesel)
 * - une contenance
 * - un contenu (la qté d'essence dedans)
 *
 * Ajouter une méthode fairePlein() à véhicule qui remplit le reservoir
 * du véhicule et enlève autant d'essence à la pompe
 * - Gérer l'erreur de type de carburant
 * - Gérer le cas où la pompe ne contient pas assez de carburant : vider le contenu
 * de la pompe dans le reservoir
 */


//public function __construct(string $nom, string $marque, int $vitesseMax, string $carburant, int $reservoirContenance)


$audi = new Voiture('r8', 'Audi', '250', 'essence', '200');
$suzuki = new Moto('Xr07', 'Suzuki', '350', 'diesel', '100');

$diesel = new Pompe( 'Pompe n°5','diesel', '500');
$essence = new Pompe( 'Pompe n°4','essence', '500');
echo $audi->getReservoirContenu();

$audi->accelere();
echo $audi->getReservoirContenu();

$audi->roule(1);
echo $audi->getReservoirContenu();

$suzuki->accelere();
echo 'Vehicule : ' . $audi->getMarque() . '-' . $audi->getNom() .' <br>Vitesse actuel: ' . $audi->getVitesse() . ' km/h <br> Reservoir : ' . $audi->getReservoirContenu() . '<br><br>';
echo 'Vehicule : ' . $suzuki->getMarque() . '-' . $suzuki->getNom() .' <br>Vitesse actuel: ' . $suzuki->getVitesse() . ' km/h <br> Reservoir : ' . $suzuki->getReservoirContenu() . '<br><br>';
echo '<hr>';

$suzuki->setVitesse(30);
$audi->setVitesse(20);
$audi->accelere();
$audi->roule(5);
$suzuki->accelere();
echo 'Vehicule : ' . $audi->getMarque() . '-' . $audi->getNom() .' <br>Vitesse actuel: ' . $audi->getVitesse() . ' km/h <br> Reservoir : ' . $audi->getReservoirContenu() . '<br><br>';
echo 'Vehicule : ' . $suzuki->getMarque() . '-' . $suzuki->getNom() .' <br>Vitesse actuel: ' . $suzuki->getVitesse() . ' km/h <br> Reservoir : ' . $suzuki->getReservoirContenu() . '<br><br>';
echo '<hr>';

$suzuki->setVitesse(60);
$audi->setVitesse(60);
$audi->accelere();
$audi->roule(60);
$suzuki->accelere();
echo 'Vehicule : ' . $audi->getMarque() . '-' . $audi->getNom() .' <br>Vitesse actuel: ' . $audi->getVitesse() . ' km/h <br> Reservoir : ' . $audi->getReservoirContenu() . '<br><br>';
echo 'Vehicule : ' . $suzuki->getMarque() . '-' . $suzuki->getNom() .' <br>Vitesse actuel: ' . $suzuki->getVitesse() . ' km/h <br> Reservoir : ' . $suzuki->getReservoirContenu() . '<br><br>';
echo '<hr>';

$suzuki->setVitesse(150);
$audi->setVitesse(150);
$audi->accelere();
$audi->roule(60);
$suzuki->accelere();
echo 'Vehicule : ' . $audi->getMarque() . '-' . $audi->getNom() .' <br>Vitesse actuel: ' . $audi->getVitesse() . ' km/h <br> Reservoir : ' . $audi->getReservoirContenu() . '<br><br>';
echo 'Vehicule : ' . $suzuki->getMarque() . '-' . $suzuki->getNom() .' <br>Vitesse actuel: ' . $suzuki->getVitesse() . ' km/h <br> Reservoir : ' . $suzuki->getReservoirContenu() . '<br><br>';
echo '<hr>';

$suzuki->setVitesse(200);
$audi->setVitesse(190);

$suzuki->accelere();
$audi->accelere();
$audi->roule(60);
echo '<hr>';

$audi->fairePlein($diesel);
$suzuki->fairePlein($diesel);
echo '<hr>';

$audi->roule(60);
echo 'Vehicule : ' . $audi->getMarque() . '-' . $audi->getNom() .' <br>Vitesse actuel: ' . $audi->getVitesse() . ' km/h <br> Reservoir : ' . $audi->getReservoirContenu() . '<br><br>';
$audi->fairePlein($essence);
$audi->fairePlein($essence);
$audi->fairePlein($essence);
echo 'Nouvelle' . $audi->getReservoirContenu();
echo '<hr>';


$audi->accelere();
$audi->roule(5);
echo 'Vehicule : ' . $audi->getMarque() . '-' . $audi->getNom() .' <br>Vitesse actuel: ' . $audi->getVitesse() . ' km/h <br> Reservoir : ' . $audi->getReservoirContenu() . '<br><br>';





