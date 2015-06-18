<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 16/06/2015
 * Time: 12:41
 */

class Database
{

    /**
     * Instance de la classe SPDO
     *
     * @var $DatabaseInstance
     * @access private
     */
    private static $DatabaseInstance = null;


    /**
     * surcharge de la fonction clone pour eviter le clonage et ainsi avoid le singleton
     *
     * @access private
     */
    private function __clone()
    {

    }


    /**
     * Définition des constantes
     *
     *
     * @access private
     */
    private $server = null;
    private $PDO = null;


    /**
     * Définition du constructeur pour la classe singleton étendu de PDO
     *
     *
     */
     private function __construct()
    {
        //var_dump($_SERVER);
        if ($_SERVER['HTTP_HOST'] == "localhost"){
            $this->server = array(
                'host' => "mysql:host=localhost;dbname=test",
                'username' => 'root' ,
                'password' => ''
            );
        }
        else
        {
            $this->server = array(
                'host' => "mysql:host=maximelede1.mysql.db;dbname=maximelede1",
                'username' => 'maximelede1' ,
                'password' => "M9Ua35wm"
            );
        }


        try
        {
            $this->PDO = new PDO($this->server['host'], $this->server['username'], $this->server['password']);
            echo "<br   />construct ";
            var_dump(self::$DatabaseInstance);
        }
        catch (PDOException $e)
        {
            die("PDO CONNECTION ERROR: " . $e->getMessage() . "<br/>");
        }
        $this->server = array();
    }




    /**
     * retourne l'instance de la classe
     *
     * @return PDO
     */
    public static function getInstance()
    {
        if(self::$DatabaseInstance == null) {
            self::$DatabaseInstance = new Database();
        }
        return self::$DatabaseInstance;
    }


    /*
     * Retourne un utilisateur
     * @var $password
     * @return  l'instance du user
     */
    function getUser($identifiant, $password)
    {
        if(!isempty($this->PDO) && login($identifiant,$password))
        {
            $requete = $this->PDO->prepare('SELECT * FROM user WHERE identifiant = ?');
            $requete->exec(array($identifiant));
            $result = $requete->fetchColumn();

            return new User($result('identifiant'), $result('mail'), $result('firstname'),$result('lastname'),$result('isAdmin') );
        }
        else
        {
            return false;
        }
    }

    /*
    *  Retourne si l'utilisateur a saisie les informations adéquates pour se connecter.
    *
    * @var $identifiant, $password
    * @acces public
    * @return boolean
    */
    function canLogin($identifiant,$password)
    {

        $requete = $this->pdo->prepare("SELECT count(*) FROM user WHERE log = ? AND mdp = ?");
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
    function userIsAdmin($identifiant)
    {
        $requete = $this->pdo->prepare("SELECT admin FROM user WHERE log = ?");
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

    /*
     *
     */
}
