<?php


namespace Animal\Continent\Asie;

use Animal\Elephant as ElephantInterface;

class Elephant implements ElephantInterface
{

    public function getTailleOreilles(): string
    {
        return 'petites';
    }
}