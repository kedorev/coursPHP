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
    const host = "mysql:host=maximelede1.mysql.db;";
    const nameDB = "maximelede1";
    const username = "maximelede1";
    const password = "M9Ua35wm";


    /**
     * Définition du constructeur pour la classe singleton étendu de PDO
     *
     *
     */
    private function __construct()
    {
        try
        {
            self::$PDOInstance = new PDO(hote, username, password);
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