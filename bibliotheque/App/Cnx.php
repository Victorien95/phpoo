<?php
namespace App;

class Cnx
{
    /**
     * @var \PDO
     */
    private static $instance;

    /**
     * Constructeur privé pour êmpecher d'instancier la classe
     */
    private function __construct()
    {

    }

    /**
     * @return \PDO
     */
    public static function getInstance(): \PDO
    {
        if (is_null(self::$instance))
        {
            self::$instance = new \PDO(
                'mysql:dbname=bibliotheque;host=localhost',
                'root',
                '',
                [
                    \PDO::MYSQL_ATTR_INIT_COMMAND =>'SET names utf8',
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
        }
        return self::$instance;
    }
}