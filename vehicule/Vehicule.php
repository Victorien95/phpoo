<?php


abstract class Vehicule
{
    /**
     * @var int|null
     */
    private $vitesseMax;
    private $carburant;
    private $reservoirContenance;
    private $reservoirContenu;
    private $nom;
    private $marque;

    /**
     * @var int
     */
    protected $vitesse = 0;
    private $consommation;


    public function __construct(string $nom, string $marque, int $vitesseMax, string $carburant, int $reservoirContenance)
    {
        $this->nom = $nom;
        $this->marque = $marque;
        $this->vitesseMax = $vitesseMax;
        $this->carburant = $carburant;
        $this->reservoirContenance = $reservoirContenance;
        $this->reservoirContenu = $reservoirContenance;
        $this->consommation = 10;
    }

    abstract public function getRoues(): int;
    abstract public function fairePlein(Pompe $pompe);

    /**
     * @return mixed
     */
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    /**
     * @param mixed $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     * @return Vehicule
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservoirContenance()
    {
        return $this->reservoirContenance;
    }

    /**
     * @param mixed $reservoirContenance
     * @return Vehicule
     */
    public function setReservoirContenance($reservoirContenance)
    {
        $this->reservoirContenance = $reservoirContenance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservoirContenu()
    {
        return $this->reservoirContenu;
    }

    /**
     * @param mixed $reservoirContenu
     * @return Vehicule
     */
    public function setReservoirContenu($reservoirContenu)
    {
        if ($reservoirContenu <= 0)
        {
            $this->reservoirContenu = 0;
            $this->setVitesse(0);
            echo "ATTENTION : Le véhicule n'a plus d'essence <br>";
            return $this;
        }
        if ($reservoirContenu > $this->reservoirContenance)
        {
            $this->reservoirContenu = $this->reservoirContenance;
            return $this;
        }
        $this->reservoirContenu = $reservoirContenu;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Vehicule
     */
    public function setNom(string $nom): Vehicule
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     * @return Vehicule
     */
    public function setMarque(string $marque): Vehicule
    {
        $this->marque = $marque;
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
        if ($vitesse > $this->vitesseMax){
            $this->vitesse = $this->vitesseMax;
            return $this;
        }
        $this->vitesse = $vitesse;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsommation(): int
    {
        return $this->consommation;
    }

    /**
     * @param int $consommation
     * @return Vehicule
     */
    public function setConsommation(int $consommation): Vehicule
    {
        $this->consommation = $consommation;
        return $this;
    }

    


    public function accelere($vitesse = 10)
    {
        if ($this->reservoirContenu == 0)
        {
            echo "Le véhicule n'a plus d'essence ! Il ne peut plus rouler désolé <br>";
            return;
        }
        $this->setVitesse($this->vitesse + $vitesse);
    }

    public function roule($temps)
    {
        $i = 1;
        $conso = (($this->consommation * $this->vitesse) / 20);
        while ($i <= $temps )
        {
            $distance = round(($this->vitesse / 60) * $i);
            $this->setReservoirContenu($this->reservoirContenu - ($conso * $distance));
            if ($this->reservoirContenu <= 0){
                echo "La voiture n'a plus d'essence ";
                break;
            }
            $i++;
        }
        echo $this->nom . ' Avance de ' . round($distance, 0) . ' km<br>';
    }


}