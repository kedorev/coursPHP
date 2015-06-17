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
    var $isLoged;

    /*
     * Variable permettant de savoir si l'utilisateur est un administrateur
     */
    var $isAdmin;

    /*
     *  Identifiant de l'utilisateur
     */
    var $identifiant;


    function __construct($identifiant, $password)
    {
        $this->identifiant = $identifiant;
        if($this::login($identifiant,$password))
        {
            $this->isLoged = 1;
            if (!$this::isAdmin($identifiant))
            {
                $this->isAdmin = 0;
            }
            else
            {
                $this->isAdmin = 1;
            }
        }
        else
        {
            $this->isLoged = 0;
            $this->isAdmin = 0;
        }
    }


    /*
    *  Retourne si l'utilisateur a saisie les informations adéquates pour se connecter.
    *
    * @var $identifiant, $password
    * @acces public
    * @return boolean
    */
    function login($identifiant,$password)
    {
        $pdo = Database::getInstance();
        $requete = $pdo->prepare("SELECT count(*) FROM login l WHERE log = ? AND mdp = ?");
        $requete->exec(array($identifiant,$password));
        $nb_res = $requete->fetchColumn();

        if ($nb_res == 1)
        {
            return true;
        }// ok
        else // pas ok
        {
            return false;
        }
    }

    /*
     *  Retourne si l'utilisateur à les droits d'administration
     *
     * @var $identifiant
     * @acces public
     * @return boolean
     */
    function isAdmin($identifiant)
    {
        $pdo = Database::getInstance();
        $requete = $pdo->prepare("SELECT admin FROM login l WHERE log = ?");
        $requete->exec(array($identifiant));
        $nb_res = $requete->fetchColumn();

        if ($nb_res['admin'] == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
