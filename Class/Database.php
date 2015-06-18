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
     * @var $PDOInstance
     * @access private
     */
    private static $PDOInstance = null;


    /**
     * surcharge de la fonction clone pour eviter le clonage et ainsi avoid le singleton
     *
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
    private $server = array(
        'host' => "mysql:host=maximelede1.mysql.db;dbname=maximelede1",
        'username' => 'maximelede1' ,
        'password' => "M9Ua35wm"
    );

    private $serverLocal = array(
        'host' => "mysql:host=localhost;dbname=test",
        'username' => 'root' ,
        'password' => "root"
    );

    /**
     * Définition du constructeur pour la classe singleton étendu de PDO
     *
     *
     */
     private static function __construct()
    {
        try
        {
            self::$PDOInstance = new PDO(self::$server['host'], self::$server['username'], self::$server['password']);
        }
        catch (PDOException $e)
        {
            die("PDO CONNECTION ERROR: " . $e->getMessage() . "<br/>");
        }
    }




    /**
     * retourne l'instance de la classe
     *
     * @return PDO
     */
    public static function getInstance()
    {
        if(self::$PDOInstance == null)
        {
            self::__construct();
        }
        return self::$PDOInstance;

    }
}