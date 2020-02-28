<?php


class Commande
{

    const TAUX_TVA = 20;
    /**
     * @var string
     */
    public static $defautStatut = 'En cours';

    public static $statutsPossibles = [
      'En cours',
      'Expédié',
      'Annulé'
    ];

    /**
     * @var string
     */
    private $statut;

    /**
     * @var int
     */
    private static $nbCommandes = 0;


    /**
     * Constructeur :  méthode appelée automatiquement à l'instanciation
     */
    public function __construct()
    {
        // self = la classe dans laquelle on se trouve
        $this->statut = self::$defautStatut;
        self::$nbCommandes ++;
    }

    /**
     * @return string
     */
    public function getStatut(): string
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     * @return Commande
     */
    public function setStatut(string $statut): Commande
    {
        if (!in_array($statut, self::$statutsPossibles)){
            trigger_error('Statut non reconnue', E_USER_ERROR);
        }
        $this->statut = $statut;
        return $this;
    }


    /**
     * @return int
     */
    public static function getNbCommandes(): int
    {
        return self::$nbCommandes;
    }


}