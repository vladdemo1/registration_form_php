<?php

class Connection{
/*
* Main connection with database
*/

    # singleton for once connect to db
    public static $connection = false;

    private function __construct(){

    }

    public static function connect($config){
    /*
    * Set connection with database
    *
    * @return connection
    *
    * @access public
    */

    try
    {
        if(!self::$connection){
            $con = new PDO("mysql:host={$config['server']}; dbname={$config['dbname']}", $config['dbuser'], $config['dbpass']);
        }

        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    
        self::$connection = $con;

        return self::$connection;
    } 
    catch(\PDOException $e)
    {
        echo $e->getMessage();
        exit;
    }

    }

}
