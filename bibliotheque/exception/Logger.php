<?php


class Logger
{
    /**
     * Throwable est l'interface qu'implémentent Exception et Error
     * @param Throwable $e
     */
    public static function  log (Throwable $e)
    {
        file_put_contents(
            'log_'. date('Y-m-d') . '.txt',
            '[' . date('Y-m-d H:i:s') . '] '
            // fichier dans lequel l'excepetion a été jetée
            . $e->getFile()
            // Aquelle ligne
            . ' line ' . $e->getLine()
            // Son message
            . ' ' . $e->getMessage()
            // La chronologie de se qui s'est passé fans le code avant que l'execution soit jetée
            . PHP_EOL . $e->getTraceAsString() . PHP_EOL,
    FILE_APPEND
        );
    }
}

