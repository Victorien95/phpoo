<?php


namespace Animal\Continent\Afrique;


class Gazelle
{
    public function voirElephant()
    {
        /*
         * Animal\Continent\Afrique\Elephant
         * car sans use, la classe est celle qui se trouve dans le namespace dans lequel on est
         */
        $elephant = new Elephant();
        echo 'Je vois un éléphant avec de '
            . $elephant->getTailleOreilles()
            . ' oreilles';
    }

    public function etreVue()
    {
        /*
         * L'antislash initial fait revenir à la racine des namespaces
         * Ici la classe Touriste sans namespace
         *
         * L'alternative est de mettre un 'use Touriste;' en haut du fichier
         */

        $touriste = new \Touriste();

        $touriste->voirGazelle();
    }

}