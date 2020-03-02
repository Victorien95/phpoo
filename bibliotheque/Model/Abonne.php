<?php


namespace Model;


use App\Cnx;

class Abonne
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $prenom;
//######################################################################################################################
//------------------------------------------- GET/SET ID ---------------------------------------------------------------
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Abonne
     */
    public function setId(?int $id): Abonne
    {
        $this->id = $id;
        return $this;
    }

//------------------------------------------- GET/SET PRENOM -----------------------------------------------------------

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     * @return Abonne
     */
    public function setPrenom(?string $prenom): Abonne
    {
        $this->prenom = $prenom;
        return $this;
    }
//################################################# FONCTIONS ##########################################################

//------------------------------------------- FONCTIONS findAll --------------------------------------------------------
    /**
     * Retourne tous les abonnés de la bdd sous la forme d'un tableau
     * @return Abonne[]
     */
    public static function findAll():array
    {
       $pdo = Cnx::getInstance();
       $stmt = $pdo->query('SELECT * FROM abonne ORDER BY id');
       $resultat = $stmt->fetchAll();

       $abonnes = [];

       foreach($resultat as $data)
       {
           $abonne = new self(); // identique a $abonne = new Abonne();
           $abonne
               ->setId($data['id'])
               ->setPrenom($data['prenom'])
               ;
           $abonnes[] = $abonne;
       }
       return $abonnes;
    }
//------------------------------------------- FONCTIONS save -----------------------------------------------------------

    public function save()
    {
        $pdo = Cnx::getInstance();
        $query = 'INSERT INTO abonne(prenom) VALUES (:prenom)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':prenom' => $this->prenom
        ]);

    }

    public function validate(array &$errors):bool
    {
        if (empty($this->prenom))
        {
            $errors[] = 'Le prénom est obligatoire';
        }elseif (mb_strlen($this->prenom) > 100)
        {
            $errors[] = 'Le prénom ne doit pas faire plus de 100 caractères';
        }
        return empty($errors);
    }

}