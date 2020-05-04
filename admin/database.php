<?php


class Database
{
    
    private static $dbhost="localhost";
    private static $dbname="burger_menu";
    private static $userdb="root";
    private static $passwordd="";
    
    private static $connexion="null";
 
    
    public static function connect()
    {
        try{
            self::$connexion = new PDO("mysql:host:" . self::$dbhost . ";dbname= " . self::$dbname,self::$userdb,self::$passwordd);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connexion;

    }
    
    public static function disconnect ()
    {
        self::$connexion=null;
    }
}

Database::connect();

?>