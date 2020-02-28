<?php
require_once 'Vehicule.php';

class Moto extends Vehicule
{
    private $roues = 2;



    /**
     * @return int
     */
    public function getRoues(): int
    {
        return $this->roues;
    }

    public function fairePlein(Pompe $pompe)
    {
        if ($this->getCarburant() != $pompe->getCarburant())
        {
            echo "Vous ne pouvez pas faire le plein à cette pompe ! Le carburant ne correspond pas";
            return $this;
        }
        if ($pompe->getContenueEssence() == 0)
        {
            echo "La pompe est vide";
            return $this;
        }
        $this->setCarburant(10);
        $pompe->setCarburant(-10);
        if ($this->getReservoirContenu() == $this->getReservoirContenance())
        {
            echo 'Message De la pompe ' . $pompe->getNom();
            echo $this->getNom() . ' A fait le plein <br>';
        }
        echo $this->getNom() . ' est à la pompe et ajoute 20 L <br>';
        return $this;

    }

}