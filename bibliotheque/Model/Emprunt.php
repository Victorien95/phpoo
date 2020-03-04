<?php


namespace Model;


use App\Cnx;
use App\DateUtils;
use Model\Livre;
use DateTime;


class Emprunt
{
    // Inclusions de trait dans la classe
    use DateUtils;
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @var int|null
     */
    private $id;
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @var Livre|null
     */
    private $livre;
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @var Abonne|null
     */
    private $abonne;
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @var \DateTime|null
     */
    private $dateSortie;
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @var \DateTime|null
     */
    private $dateRendu;
//######################################################################################################################
//----------------------------------------------------------------------------------------------------------------------
    /**
     * @return Livre|null
     */
    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    /**
     * @param Livre|null $livre
     */
    public function setLivre(?Livre $livre): self
    {
        $this->livre = $livre;
        return $this;
    }
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @return Abonne|null
     */
    public function getAbonne(): ?Abonne
    {
        return $this->abonne;
    }

    /**
     * @param Abonne|null $abonne
     */
    public function setAbonne(?Abonne $abonne): self
    {

        $this->abonne = $abonne;
        return $this;
    }
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @return \DateTime|null
     */
    public function getDateSortie(): ?\DateTime
    {
        return $this->dateSortie;
    }

    /**
     * @param \DateTime|null $dateSortie
     */
    public function setDateSortie(?\DateTime $dateSortie): self
    {
        $this->dateSortie = $dateSortie;
        return $this;
    }
//----------------------------------------------------------------------------------------------------------------------

    /**
     * @return \DateTime|null
     */
    public function getDateRendu(): ?\DateTime
    {
        return $this->dateRendu;
    }

    /**
     * @param \DateTime|null $dateRendu
     */
    public function setDateRendu(?\DateTime $dateRendu): self
    {
        $this->dateRendu = $dateRendu;
        return $this;
    }
//----------------------------------------------------------------------------------------------------------------------

//SET/GET ID

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

//######################################################################################################################
//----------------------------------------------------------------------------------------------------------------------


    public function getDateRenduAsString()
    {
        return $this->dateFr($this->dateRendu, 'En cours');
        
}




    /**
     * @return Emprunt[]
     * @throws \Exception
     */
    public static function findAll():array
    {
        $pdo = Cnx::getInstance();
        $query = <<<SQL
                SELECT id, id_livre, id_abonne, date_sortie, date_rendu FROM emprunt ORDER BY id
SQL;

        $stmt = $pdo->query($query);
        $resultat = $stmt->fetchAll();

        $emprunts = [];

        foreach($resultat as $data)
        {
            $id = $data['id'];
            $abonne = Abonne::find($data['id_abonne']);

            $livre = Livre::find($data['id_livre']);

            $dateSortie = (empty($data['date_sortie'])) ? null : new \DateTime($data['date_sortie']);
            $dateRendu = (empty($data['date_rendu'])) ? null : new \DateTime($data['date_rendu']);

            $emprunt = new self();
            $emprunt
                ->setId($id)
                ->setLivre($livre)
                ->setAbonne($abonne)
                ->setDateSortie($dateSortie)
                ->setDateRendu($dateRendu)
            ;
            $emprunts[] = $emprunt;
        }
        return $emprunts;
    }
}