<?php

class Database
{
    private static $connection = null;

    private static function createConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "fixbit";

        // Create connection
        self::$connection = new mysqli($servername, $username, $password, $databasename);

        // Check connection
        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }

        return self::$connection;
    }
        

    /**
     * @Desc This returns the database connection 
     */
    public static function getDbInstance()
    {
      if(self::$connection == null){
        return self::createConnection();
      }else{
        return self::$connection;
      }
    }
}
