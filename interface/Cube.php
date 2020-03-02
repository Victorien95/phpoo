<?php
require_once 'Volume.php';

/**
 * Class Cube
 *
 * La classe Cube implémente l'interface Volume: Elle doit implémenter (définir ac un contenu) la méthode
 * getForme() définie dans Volume
 */
class Cube implements Volume
{
    public function getForme(): string
    {
        return 'cube';
    }
}