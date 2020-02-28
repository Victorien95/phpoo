<?php


final class Siamois extends Chat
{
    /*
     * La méthode ronronner de Chat ne peut pas être surchargéee car déclarée finale
     *
    public function ronronner()
    {

        echo 'Ronronron';
    }
    */

    public function direCouleurYeux()
    {
        // l'attribut couleurYeux est déclaré en privé dans Chat et don n'est pas connu dans Siamois:
        //echo "J'ai les yeux de couleur" . $this->couleurYeux();

        // On doit utiliser le getter pour y accéder:
        echo "<br>J'ai les yeux de couleur" . $this->getCouleurYeux() . '<br>';
    }

    public function direLongeurPoil()
    {
        // L'attribut longueurPoils est déclaré protégé dans Chat et donc utilisable dans les méthodes de ses classes filles:
        echo "<br>J'ai les poils " . $this->longeurPoil . '<br>';
    }

}