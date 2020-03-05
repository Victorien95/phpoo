<?php
require_once 'User.php';
require_once 'Logger.php';


try{
    $user = new User('aa', 'Mr', new DateTime());
    // jamais executé car l'erreur survient sur $user tout ce qui suit est donc annulé et on passe au catch
    echo 'la';

}catch (Exception $e){
    echo $e->getMessage();
    Logger::log($e);
}


try{
    $user = new User('Ben', 'Monsieur', new DateTime());

}catch (UnexpectedValueException $e){
    echo "<br>Traitement d'une exception de type UnexpectedValueException";
    Logger::log($e);
}catch (Exception $e){
    echo '<br>' . $e->getMessage();
    Logger::log($e);
}

try{
    $user = new User('Ben', 'Mr', '2010-01-02');

}catch (Throwable $e){ // Attrape les exceptions et les erreurs
    echo $e->getMessage();
    Logger::log($e);
}