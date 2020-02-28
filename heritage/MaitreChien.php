<?php
require_once 'Chien.php';


class MaitreChien
{
    /**
     * On instancie un objet chien
     * @var Chien|null
     */
    private $chien;
//--------------------------- CHIEN SET/GET ---------------------------//
    /**
     * @return Chien|null
     */
    public function getChien(): ?Chien
    {
        return $this->chien;
    }

    /**
     * @param Chien|null $chien
     * @return MaitreChien
     */
    public function setChien(?Chien $chien): MaitreChien
    {
        $this->chien = $chien;
        return $this;
    }

//--------------------------- CARESSER ---------------------------//
    public function carresserChien()
    {
        // Si l'attribut chien a été setté:
        if (!is_null($this->chien))
        {
            echo $this->chien->crier() . '<br>';
        }
        else
        {
            echo "Je n'ai pas encore de chien <br>";
        }
    }
}

