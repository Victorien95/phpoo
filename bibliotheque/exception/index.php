<?php
require_once 'User.php';


try{
    $user = new User('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Mr', new DateTime());
    // jamais executé car l'erreur survient sur $user tout ce qui suit est donc annulé et on passe au catch
    echo 'la';

}catch (Exception $e){
    echo $e->getMessage();

}