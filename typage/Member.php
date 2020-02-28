<?php


class Member
{
    /**
     * @var string
     */
    public $fisrtname = 'Victorien';

    /**
     * @var string|null
     */
    public $lastname;

    /**
     * @var DateTime
     */
    public $birthDate;

    /**
     * Le : String désigne la valeur de retour de la méthode
     *
     * @return string
     */
    public function getFullname():string
    {
        return rtrim($this->fisrtname . ' ' . $this->lastname);
    }

    /**
     * Typage sur le nom d'un classe
     * Le point d'intérogation veut dire le type ou null
     * @return DateTime
     */
    public function getBirthDate():?DateTime
    {
        return $this->birthDate;
    }

    /**
     * void quand la méthode retourn null
     *
     * @param int $augmentation
     */
    public function augmenter(int $augmentation):void
    {
        $this->salaire += $augmentation;
    }

}

