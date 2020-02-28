<?php
require_once 'Animal.php';

class Maitre
{
    /**
     * @var Animal|null
     */
    private $animal;

//--------------------------- ANIMAL SET/GET ---------------------------//

    /**
     * @return Animal|null
     */
    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    /**
     * @param Animal|null $animal
     * @return Maitre
     */
    public function setAnimal(?Animal $animal): Maitre
    {
        $this->animal = $animal;
        return $this;
    }

}