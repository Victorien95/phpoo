<?php


namespace Animal;

// use avec un alias sur un namepace et non une classe
use Animal\Continent as Monde;



class Fourmi
{
    public function voirElephantAfrique()
    {
        /*
         * Animal\Continent\Afrique\Elephant :
         * nom de la classe relativement au namespace dans lequel on est
         */
        $elephant = new Continent\Afrique\Elephant();
        echo 'Je vois un éléphant avec de '
            . $elephant->getTailleOreilles()
            . ' oreilles';
    }

    public function  voirElephant(string $continent)
    {
        if($continent == 'afrique'){
            $elephant = new Monde\Afrique\Elephant();
        }
        elseif($continent == 'asie')
        {
            $elephant = new Monde\Asie\Elephant();
        }
        //--
        if (isset($elephant)){
            echo 'Je vois un éléphant avec de '
                . $elephant->getTailleOreilles()
                . ' oreilles';
        }
        else
        {
            echo "Il n'y a pas déléphants où je me trouve";
        }
    }
}