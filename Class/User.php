<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 16/06/2015
 * Time: 12:52
 */

class User
{
    /**
     * Variable permettant de savoir si l'utilisateur est enregistre
     */
    private $isLoged;

    /*
     * Variable permettant de savoir si l'utilisateur est un administrateur
     */
    private $isAdmin;

    /*
     *  Identifiant de l'utilisateur
     */
    private $identifiant;

    /*
     * Mail de l'utilisateur
     */
    private $mail;

    /*
     * Prénom de l'utilisateur
     */
    private $firstname;

    /*
     * Nom de l'utilisateur
     */
    private $lastname;


    function __construct($identifiant, $mail, $firstname, $lastname, $isloged)
    {
        $this->identifiant = $identifiant;
        $this->isLoged = $isloged;
        $this->firstname = $firstname;
        $this->mail = $mail;
        $this->lastname = $lastname;
    }




    /*
     * Vérifie si le mail est déjà présent
     *
     * @var $mail
     */
    function mailIsPresent($mail)
    {
        $pdo = Database::getInstance();
        $requete = $pdo->prepare("SELECT count(*) FROM user WHERE mail = ?");
        $requete->exec(array($mail));
        $nb_res = $requete->fetchColumn();

        if ($nb_res == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    /*
     * Vérifie si l'identifiant est déjà présent
     *
     * @var $mail
     */
    function identifiantIsPresent($identifiant)
    {
        $pdo = Database::getInstance();
        $requete = $pdo->prepare("SELECT count(*) FROM user WHERE identifiant = ?");
        $requete->exec(array($identifiant));
        $nb_res = $requete->fetchColumn();

        if ($nb_res == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    /*
     * Ajoute un utilisateur à la DB
     *
     * @var $identifiant, $password,$mail,$firstname,$lastname
     */
    function newUser($identifiant, $password,$mail,$firstname,$lastname)
    {

    }
}
