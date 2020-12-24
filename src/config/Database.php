<?php

namespace App\src\config;
//bdd qu'on appelle a chaque fois qu'on fais une requete
class Database
{

    //protected $_connexion;
    //public $table;
    CONST DB_HOST='mysql:host=localhost;dbname=avenoel;charset=utf8';
    CONST DB_USER='root';
    CONST DB_PASSWORD='';

    private $database;

    public function getConnexion()
    {
    try {
            $connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            echo ('Database connection success!');
            return $connection;
        } catch (\Exception $exception) {
            die('Database connection failed: ' . $exception->getMessage());
        }
    }

    public function connexion()
    {
        if(!isset($this->database)){
            return $this->getConnexion();
        }
        
        return $this->database;
    }
    
}
    
?>