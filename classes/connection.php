<?php

class Database{

    public static $connection;

    public static function setUpConnection(){
        if(!isset(Database::$connection)){
            Database::$connection = 
            new mysqli("localhost","root","","safari_management_system");
        }
    }

    public static function getConnection(){
        Database::setUpConnection();
        return Database::$connection;
    }

    public static function iud($q){
        Database::setUpConnection();
        if(Database::$connection->query($q)){
            return true;
        }
        return false;
    }

    public static function search($q){
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }

}

?>