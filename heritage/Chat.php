<?php
require_once 'Animal.php';


class Chat extends Animal
{


    /**
     * @var string|null
     */
    private $couleurYeux;
    /**
     * @var string|null
     */
    protected $longeurPoil;



//--------------------------- couleurYeux SET/GET ---------------------------//

    /**
     * @return string|null
     */
    public function getCouleurYeux()
    {
        return $this->couleurYeux;
    }

    /**
     * @param string|null $couleurYeux
     * @return Chat
     */
    public function setCouleurYeux(?string $couleurYeux): Chat
    {
        $this->couleurYeux = $couleurYeux;
        return $this;
    }


//--------------------------- $longeurPoil SET/GET ---------------------------//

    /**
     * @return string|null
     */
    public function getLongeurPoil(): ?string
    {
        return $this->longeurPoil;
    }

    /**
     * @param string|null $longeurPoil
     * @return Chat
     */
    public function setLongeurPoil(?string $longeurPoil): Chat
    {
        $this->longeurPoil = $longeurPoil;
        return $this;
    }








//--------------------------- METHODES ---------------------------//

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

    final public function ronronner()
    {
        echo 'Ronron';
    }
}