<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 17/06/2015
 * Time: 11:38
 */

require_once '../Include/variable.php';

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
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        if(isset($_POST['password']))
        {
            $password = $_POST['password'];
            $password = $hash = password_hash($password,PASSWORD_BCRYPT) ;

            $user = new User($id,$password);
        }
        else
        {
            echo "Password don't define";
        }
    }
    else
    {
        echo "Loggin don't define";
    }
}
