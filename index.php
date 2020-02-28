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

    /**
     * @var int
     */
    private $salaire = 3000;



    public function nomComplet()
    {
        // $this fait référence à l'objet instance de la classe qui appelle la méthode
        return $this->prenom . ' ' . $this->nom;
    }

    /**
     * @return int
     */
    public function getSalaire()
    {
        // L'attribut privé salaire est accessible et modifiable depuis les méthodes de la classe
        return $this->salaire;
    }


    // faire une méthode augmenterSalaire() qui prend en paramètre le niveau d'augmentation et qui augmente le salaire de l'employé

    /**
     * @param $augmentation
     */
    public function augmenterSalaire($augmentation)
    {
        $this->salaire += $augmentation;
    }
}
//----------------------------------------------------------------------------------------------------------------------

function br($nb = 1)
{
    for ($i = 0; $i < $nb; $i++)
    {
        echo '<br>';
    }
}

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
echo $moi->nomComplet(); echo '<br>';

// fatal error : l'attribut salaire est privé
//echo $moi->salaire;

echo $moi->getSalaire();
$moi->augmenterSalaire('10');
br();
echo $moi->getSalaire();

