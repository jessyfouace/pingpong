<?php
include('../../mdp/mdp.php');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=pingpong;charset=utf8', 'root', $mdp);
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
