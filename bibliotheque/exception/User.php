<?php


class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $civility;

    /**
     * @var DateTime
     */
    private $birthdate;


    public function __construct($name, $civility, $birthdate)
    {
        $this
            ->setName($name)
            ->setCivility($civility)
            ->setBirthdate($birthdate)
        ;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): User
    {
        if(mb_strlen($name) > 20){
            throw new Exception('Le nom est trop long');
        }
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCivility(): string
    {
        return $this->civility;
    }

    /**
     * @param string $civility
     * @return User
     */
    public function setCivility(string $civility): User
    {
        if(!in_array($civility, ['Mr', 'Mme'])){
            throw new UnexpectedValueException('Civilité non reconnue');
        }
        $this->civility = $civility;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    /**
     * @param DateTime $birthdate
     * @return User
     */
    public function setBirthdate(DateTime $birthdate): User
    {
        $this->birthdate = $birthdate;
        return $this;
    }


}