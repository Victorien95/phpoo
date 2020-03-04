<?php

use Model\Abonne;

require_once 'autoload.php';

// Si on a reçu un id dans l'url
if(isset($_GET['id'])){
    $abonne = Abonne::find((int)$_GET['id']);

    // si l'id existe en bdd
    if(!is_null($abonne))
    {
        // On vérifie que l'abonné n'a pas d'emprunts pour éviter l'erreur sur la contrainte de clé étrangère
        if (!$abonne->hasEmprunts())
        {
            $abonne->delete();
        }
    }
}

header('Location: abonnes.php');