<?php


class Pompe
{

    private $nom;
    /**
     * @var string
     */
    private $carburant;
    /**
     * @var int
     */
    private $contenanceEssence;
    /**
     * @var int
     */
    private $contenueEssence;

    public function __construct(string $nom, string $carburant, int $contenanceEssence)
    {
        $this->nom = $nom;
        $this->carburant = $carburant;
        $this->contenanceEssecne = $contenanceEssence;
        $this->contenueEssence = $contenanceEssence;
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
     * @return Pompe
     */
    public function setNom(string $nom): Pompe
    {
        $this->nom = $nom;
        return $this;
    }



//----------------------------------------------------------------------------------------------------------------------



    /**
     * @return string
     */
    public function getCarburant(): string
    {
        return $this->carburant;
    }

    /**
     * @param string $carburant
     * @return Pompe
     */
    public function setCarburant(string $carburant): Pompe
    {
        $this->carburant = $carburant;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceEssence(): int
    {
        return $this->contenanceEssecne;
    }

    /**
     * @param int $contenanceEssence
     * @return Pompe
     */
    public function setContenanceEssence(int $contenanceEssence): Pompe
    {
        $this->contenanceEssence = $contenanceEssence;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenueEssence(): int
    {
        return $this->contenueEssence;
    }

    /**
     * @param int $contenueEssence
     * @return Pompe
     */
    public function setContenueEssence(int $contenueEssence): Pompe
    {
        if ($this->contenueEssence <= 0)
        {
            echo "ATTENTION : Plus d'essence dans la POMPE <br>";
            $this->contenueEssence = 0;
            return $this;
        }
        $this->contenueEssence = $contenueEssence;
        return $this;
    }


}