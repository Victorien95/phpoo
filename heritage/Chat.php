<?php
require_once 'Animal.php';


class Chat extends Animal
{

    /**
     * Surcharge de la méthode sePresente() définit dans la classe Animal(=rédéfinition)
     * @return string
     */
    public function sePresenter()
    {
        // parent fait référence à la classe dont on hérite. S'utilise toujours avec ::
        return parent::sePresenter() . ' et je suis un chat';
    }

    /**
     * @inheritDoc
     */
    public function crier(): string
    {
        return 'Miaou';
    }
}