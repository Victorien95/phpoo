<?php


abstract class Animal
{
    /**
     * @var string|null
     */
    private $nom;

    public function __construct(string $nom = null)
    {
        $this->setNom($nom);
    }

    /**
     * @return string|null
     */

    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     * @return animal
     */
    public function setNom(?string $nom): animal
    {
        $this->nom = $nom;
        return $this;
    }

    public function sePresenter()
    {
        return 'Je suis un animal';
    }

    /**
     * méthode abstraite (sans contenu)
     * Cette méthode doit être implémentée (définie avec un contenu)
     * dans toute les classes qui hérite d'Animal
     * @return string
     */
    abstract public function crier():string;
}