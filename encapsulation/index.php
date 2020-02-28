<?php
require_once 'Book.php';

function br($nb = 1)
{
    for ($i = 0; $i < $nb; $i++)
    {
        echo '<br>';
    }
}

$onePiece = new Book();

// On utilise le setter pour affecter une valeur à l'attribut
$onePiece->setAuthor('Echiiro Oda');

// Le getter pour accèder à la valeur de l'attribut
echo $onePiece->getAuthor();


// appel chaîné aux setter grâce aux return $this dans les méthodes
// = interface fluide
$emile = new Book();
$emile
    ->setAuthor('Rousseau')
    ->setNbPage(300)
;

// fatal error : le setter atten un objet DateTime
//$emile->setPublicationDate('1750-05-01');

$emile->setPublicationDate(new DateTime('1750-05-01'));
br();

// appel de la méthode format() de l'objet DateTime contenu dans l'attribut
echo $emile->getPublicationDate()->format('d/m/Y');

// fatel error : getPublicationDate() retourne null et non un objet DateTime car ne nous l'avons pas encore setter
//echo $onePiece->getPublicationDate()->format('d/m/Y');
br();
echo $onePiece->getPublicationDateAsString();

$onePiece->addPage(50);

echo $onePiece->getNbPage();

