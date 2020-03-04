<?php


namespace App;


trait DateUtils
{
    public function dateFr(?\DateTime $date, string $default = ''): string
    {
        if (!is_null($date)) {
            return $date->format('d/m/Y');
        }
        return $default;
    }
}