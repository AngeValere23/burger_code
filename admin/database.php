<?php

class Database
{
    private static $dbHost = "premium31.web-hosting.com";
    private static $dbName = "rockoqmd_burger";
    private static $dbUsername = "rockoqmb_ange";
    private static $dbUserpassword = "burger_code";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
