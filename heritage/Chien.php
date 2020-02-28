<?php
require_once 'Animal.php';


class Chien extends Animal
{

    /**
     * @inheritDoc
     */
    public function crier(): string
    {
        return 'Ouaf';
    }
}