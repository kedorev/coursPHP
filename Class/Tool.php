<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 18/06/2015
 * Time: 11:48
 */

class Tool {

    /*
     * Crypte a sting
     * @vars $string+
     * @return hte crypted string
     */
    static function Crypt($string)
    {
        $hash = password_hash($string,PASSWORD_BCRYPT) ;
        return $hash;
    }

    /*
     * Compare a string without crypted with one crypted
     * @car $password, $cryptedPassword
     * @return boolean
     */
    static function matchPassword($password,$cryptedPassword)
    {
        if(Tool::Crypt($password)==$cryptedPassword)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


}