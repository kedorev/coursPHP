<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 17/06/2015
 * Time: 11:39
 */

try
{
    $bdd = Database::getInstance();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if(isset($bdd))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $password = $hash = password_hash($password,PASSWORD_BCRYPT) ;


    $requete = $bdd->prepare('SELECT count(name) FROM user WHERE name =?');
    $requete->execute(array($id));
    $nb_res = $requete->fetchColumn();
    if($nb_res == 1)
    {
        echo 0;
    }
    else
    {
        $requete = $bdd->prepare('INSERT INTO user (Name, Password) VALUES (?,?)');
        $requete->execute(array($id, $password));
        echo 1;
    }
    $bdd = null;
}
else
{
    echo "Can't etablished connexion";
}