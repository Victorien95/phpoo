<?php


abstract class Vehicule
{
    /**
     * @var int
     */
    private $vitesseMax;

    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenanceReservoir;

    /**
     * @var int
     */
    private $contenuReservoir;
    
    private $vitesse = 0;

    private static $carburantsAcceptes = [
        'essence',
        'diesel',
    ];

    public function __construct(
        int $vitesseMax,
        string $typeCarburant,
        int $contenanceReservoir,
        int $contenuReservoir
    ){
        $this
            ->setVitesseMax($vitesseMax)
            ->setTypeCarburant($typeCarburant)
            ->setContenanceReservoir($contenanceReservoir)
            ->setContenuReservoir($contenuReservoir);
    }

//-----------------------------Getter&Setter----------------------------------------------
    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {

        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     * @return Vehicule
     */
    public function setTypeCarburant(string $typeCarburant): Vehicule
    {
        if(!in_array($typeCarburant, self::$carburantsAcceptes)){
            trigger_error('Type de carburant refusé', E_USER_ERROR);
        }
        $this->typeCarburant = $typeCarburant;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * @param int $contenanceReservoir
     * @return Vehicule
     */
    public function setContenanceReservoir(int $contenanceReservoir): Vehicule
    {
        $this->contenanceReservoir = $contenanceReservoir;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * @param int $contenuReservoir
     * @return Vehicule
     */
    public function setContenuReservoir(int $contenuReservoir): Vehicule
    {
        $this->contenuReservoir = $contenuReservoir;
        return $this;
    }

    /**
     * @param int $ajout
     * @return Vehicule
     */
    public function addContenuReservoir(int $ajout): Vehicule
    {
        $this->setContenuReservoir($this->contenuReservoir + $ajout);
        return $this;
    }
    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     * @return Vehicule
     */
    public function setVitesse(int $vitesse): Vehicule
    {
        if($vitesse>$this->vitesseMax){
            trigger_error("impossible d'aller à plus de " .$this->vitesseMax . 'Km/h', E_USER_NOTICE);
            $vitesse = $this->vitesseMax;
        }
        $this->vitesse = $vitesse;
        return $this;
    }

    public function accelerer($acceleration)
    {
        $this->setVitesse($this->vitesse + $acceleration);
    }

    public function fairePlein(Pompe $pompe) //on type l'objet pompe pour etre sur de ce que l'on recoit
    {
        //contrôle des types de carburant
        if($this->typeCarburant != $pompe->getTypeCarburant()){  //on passe par le getter car l'attribut est priver et non ne somme pas dans la classe Pompe
            echo "oups, j'allais me tromper....";
            return;
        }
        // définir la quantité d'essence nécéssaire pour faire le plein
        $besoinEssence = $this->contenanceReservoir - $this->contenuReservoir;

        //Si la pompe ne contient pas assez de carburant vis a vis de besoinEssence:
        if ($besoinEssence > $pompe->getContenuCuve()){
            //on redéfinit le besoin avec tout le contenu de la cuve
            $besoinEssence = $pompe->getContenuCuve();
        }
        //ajouter cette quantité dans le reservoir du véhicule
        $this->setContenuReservoir($this->contenuReservoir + $besoinEssence);
        //ou en ajoutant la méthode addContenuReservoir:
        //$this->addContenuReservoir($besoinEssence);
        //soustraire cette quantité à la cuve de la pompe
        $pompe->setContenuCuve($pompe->getContenuCuve() - $besoinEssence);
    }



    
    abstract public function getNBRoues():int;









}