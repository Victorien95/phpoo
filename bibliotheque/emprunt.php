<?php

use App\Cnx;
use Model\Abonne;
use Model\Emprunt;

/*            <td><?= (is_null($emprunt->getDateRendu())) ? 'En cours' : $emprunt->getDateRendu()->format('d/m/Y') ?></td>
*/
require_once 'includes/init.php';
$emprunts = Emprunt::findAll();
require 'layout/header.php';
?>


<h1>Affichage des emprunts</h1>




<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Titre du livre</th>
        <th>Emprunté par</th>
        <th>Date d'emprunt</th>
        <th>Rendu le</th>
    </tr>
    <?php
    foreach ($emprunts as $emprunt):
    ?>
        <tr>
            <td><?= $emprunt->getId() ?></td>

            <!-- cf __toString() dans livre -->
            <td><?= $emprunt->getLivre() ?></td>
            <td><?= $emprunt->getAbonne() ?></td>
            <td><?= $emprunt->dateFr($emprunt->getDateSortie()) ?></td>
            <td><?=$emprunt->getDateRenduAsString()?></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php

require 'layout/footer.php';
?>
