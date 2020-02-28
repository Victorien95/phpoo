<?php


class Book
{
    /**
     * @var string|null
     */
    private $author;

    /**
     * @var int
     */
    private $nbPage;

    /**
     * @var DateTime|null
     */
    private $publicationDate;

//----------------------------------------------------------------------------------------------------------------------

//-------------------- author ----------------------------

    /**
     * Getter de l'attribut author: retourne la valeur de l'attribut
     * @return string
     */
    public function getAuthor() : ?string
    {
        return $this->author;
    }

    /**
     * Setter de l'attribut author: Lui affecte la vlauer reçue en paramètre
     *
     * self = la classe dans laquelle on est
     * @param string $author
     */

    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }

//-------------------- nbPage ----------------------------
    /**
     * @return int
     */
    public function getNbPage(): ?int
    {
        return $this->nbPage;
    }

    /**
     * @param int $nbPage
     * @return Book
     */
    public function setNbPage(int $nbPage): Book
    {
        $this->nbPage = $nbPage;
        return $this;
    }

    // appel du setter dans une fonction pour ajouter des pages
    public function addPage(int $nbPages):void
    {
        $this->setNbPage($this->nbPage + $nbPages);
    }


//-------------------- publicationDate ----------------------------

    /**
     * @return DateTime|null
     */
    public function getPublicationDate(): ?DateTime
    {
        return $this->publicationDate;
    }

    /**
     * @param DateTime|null $publicationDate
     * @return Book
     */
    public function setPublicationDate(?DateTime $publicationDate): Book
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicationDateAsString(): string
    {
        if(is_null($this->publicationDate))
        {
            return 'Inconnue';
        }
        return $this->publicationDate->format('d/m/Y');
    }




}