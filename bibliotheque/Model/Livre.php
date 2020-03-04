<?php


namespace Model;


use App\Cnx;

class Livre
{

    /**
     * @var int|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $auteur;

    /**
     * @var string|null
     */
    private $titre;


    /**
     * Méthode appelée automatiquement quand on utilise un objet comme chîne de caractères
     * (ex: faire un echo dessus)
     * @return string|null
     */
    public function __toString()
    {
        return $this->titre;
    }


    public static function find(int $id): ?self
    {
        $pdo = Cnx::getInstance();
        $stmt = $pdo->query("SELECT * FROM livre WHERE id = $id");
        $resultat = $stmt->fetchAll();


        if (empty($resultat))
        {
            return null;
        }

        $livre = new self();
        $livre
            ->setId($resultat[0]['id'])
            ->setAuteur($resultat[0]['auteur'])
            ->setTitre($resultat[0]['titre'])
        ;
        return $livre;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Livre
     */
    public function setId(int $id): Livre
    {
        $this->id = $id;
        return $this;
    }



    /**
     * @return string
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre):self
    {
        $this->titre = $titre;
        return $this;
    }



}