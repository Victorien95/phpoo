<?php
namespace Animal\Continent\Afrique;

use Animal\Elephant as ElephantInterface;

class Elephant implements ElephantInterface
{

    public function getTailleOreilles(): string
    {
        return 'grandes';
    }
}