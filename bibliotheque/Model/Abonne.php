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
//################################################# METHODE ##########################################################

//------------------------------------------- METHODE findAll --------------------------------------------------------
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
//------------------------------------------- METHODE find -------------------------------------------------------------

    /**
     * retourne un abonné à partir de son id
     *
     * @param int $id l'id de l'abonné
     * @return static|null
     */
    public static function find(int $id): ?self
    {
       $pdo = Cnx::getInstance();
       $stmt = $pdo->query("SELECT * FROM abonne WHERE id = $id");
       $data = $stmt->fetch();

       if (empty($data))
       {
           return null;
       }

       $abonne = new self();
       $abonne
           ->setId($data['id'])
           ->setPrenom($data['prenom'])
       ;
       return $abonne;
    }


//------------------------------------------- METHODE save -------------------------------------------------------------

    public function save()
    {
        $pdo = Cnx::getInstance();
        if (is_null($this->id)){
            $this->insert();

        }else{
            $this->update();
        }
    }

//------------------------------------------- METHODE delete -----------------------------------------------------------
    public function delete()
    {
        $pdo = Cnx::getInstance();
        $query = "DELETE FROM abonne WHERE id = $this->id";
        $pdo->exec($query);
    }

//------------------------------------------- METHODE hasemprunt -------------------------------------------------------


    public function hasEmprunts():bool
    {
        $pdo = Cnx::getInstance();
        $query = "SELECT count(*) FROM emprunt WHERE id_abanne = $this->id";
        $stmt = $pdo->query($query);

        return $stmt->fetchColumn() != 0;
    }



//------------------------------------------- METHODE validate ---------------------------------------------------------

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
//------------------------------------------- METHODE inset + update appelées dans save --------------------------------

    /**
     * @param 'appelé dans méthode save pour inserer un abonné si celui-ci n'existe pas
     */
    private function insert()
    {
        $pdo = Cnx::getInstance();

        $query = 'INSERT INTO abonne(prenom) VALUES (:prenom)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':prenom' => $this->prenom
        ]);
    }

    /**
     * appelé dans méthode save pour update un abonné si celui-ci existe déjà en BDD
     */
    private function update()
    {
        $pdo = Cnx::getInstance();

        $query = "UPDATE abonne SET prneom = :prenom WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':prenom' => $this->prenom,
            ':id' => $this->id
        ]);
    }
}