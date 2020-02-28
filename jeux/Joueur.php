<?php


class Joueur
{

    private $hp = 100;
    private $name;
    private $prenom;
    static $intensiteFrapper = [
        'faible' => 10,
        'moyenne' => 30,
        'forte' => 50
    ];


    private $accuracy = 50;

    public function __construct(string $name, string $prenom)
    {
        $this->name = $name;
        $this->prenom = $prenom;
    }
//----------------------------------------------------------------------------------------------------------------------


//---------------------------------------------
    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     * @return Joueur
     */
    public function setHp(int $hp): Joueur
    {
        if ($hp < 0){
            $this->hp = 0;
            echo $this->prenom . ' est mort !';
            return $this;
        }
        $this->hp = $hp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    public function frapper($joueur, $intensite)
    {
        if (!array_key_exists($intensite, self::$intensiteFrapper)){
            echo 'Frappe impossible';
            return;
        }
        $random = random_int(0, 100);
        if ($this->accuracy > $random){
            $joueur->setHp($joueur->hp - self::$intensiteFrapper[$intensite]);

            echo 'Le joueur ' . $joueur->prenom . ' frappe ' . $this->prenom . '<br>';
            echo $joueur->prenom . ' HP = ' . $joueur->hp . '<br>';

        }else{
            echo $this->prenom . ' miss<br>';
        }
    }

//---------------------------------------------



}