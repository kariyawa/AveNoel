<?php

namespace App\src\model;

use App\src\config\Database;

class Post
{
     //entité Client("table" Client du côté SQL), partie objet


    public function getId()
    {
      return $this->id;
    }

    public function setId(string $id)
    {
      $this->id = $id;
    }

    public function getIdClient()
    {
      return $this->idclient;
    }

    public function setIdClient(string $idclient)
    {
      $this->idclient = $idclient;
    }



    // ------------------------------A FINIR--------------------------------------------
    public function getPost()
    {
      
      $database = new Database();
  
      //var_dump($database);
      $connection = $database->getConnection();
  
      $result = $connection->query('SELECT * FROM post');
  
      return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>