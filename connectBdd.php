<?php
/**
 * Created by PhpStorm.
 * User: jdelagorce
 * Date: 17/10/14
 * Time: 12:19
 */
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=bddagile', 'root', 'bddFNtS22bdd');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>