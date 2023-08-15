<?php

class Connection{

    public static function make(){

    try
    {
        return new PDO('mysql:host=127.0.0.1; dbname=mysql', 'vladdemo', 'password');
    } 
    catch(PDOExeption $e)
    {
        die('Could not connect');
    }

    }

}