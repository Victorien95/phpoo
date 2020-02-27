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
}

// instanciation de la classe
// $moi est un objet instance de la classe Employé
$moi = new Employe();

// la flèche permet d'accèder à l'attribut
echo $moi->prenom;
// ezqr