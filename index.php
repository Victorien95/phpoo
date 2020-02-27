<?php
class Employe
{
    /**
     * attribut de classe avec une valeur par défaut
     * @var string
     */
    public $prenom = 'Victorien';


    /**
     *  attribut de classe sans valeur par défaut (=null)
     * @var string
     */
    public $nom;

    /**
     * Une méthode est une fonction interne à la classe
     * @return string
     */

    public function nomComplet()
    {
        // $this fait référence à l'objet instance de la classe qui appelle la méthode
        return $this->prenom . ' ' . $this->nom;
    }
}
//----------------------------------------------------------------------------------------------------------------------

// instanciation de la classe
// $moi est un objet instance de la classe Employé
$moi = new Employe();

// la flèche permet d'accèder à l'attribut
$moi->nom = 'Faton';

echo $moi->prenom . ' '; echo $moi->nom;
var_dump($moi->prenom, $moi->nom);


$toi = new Employe();
$toi->prenom = 'Ben';
var_dump($moi, $toi);

// appel de la méthode nomComplet()
echo $moi->nomComplet();
