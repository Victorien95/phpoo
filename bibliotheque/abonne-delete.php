<?php

use App\FlashMessage;
use Model\Abonne;

require_once 'includes/init.php';

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
            FlashMessage::set("L'abonné est supprimé");
        }else{
            FlashMessage::set("L'abonné ne peut pas être supprimé", 'danger');
        }
    }
}

header('Location: abonnes.php');