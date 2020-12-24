<?php

namespace App\src\model;

use App\src\config\Database;

class Client
{
    private $id; //entité Client("table" Client du côté SQL), partie objet

    private $firstName;

    private $lastName;

    private $email;

    private $password;

    private $isAdmin;

    private $avatarPath;

    private $lastConnection;


    public function getId()
    {
      return $this->id;
    }

    public function setId(string $id)
    {
      $this->id = $id;
    }


    public function getFirstName()
    {
      return $this->firstName;
    }

    public function setFirstName(string $FirstName)
    {
      $this->firstName = $firstName;
    }


    public function getLastName()
    {
      return $this->lastName;
    }

    public function setLastName(string $LastName)
    {
      $this->lastName = $lastName;
    }


    public function getEmail()
    {
      return $this->email;
    }

    public function setEmail(string $email)
    {
      $this->email = $email;
    }


    public function getPassword()
    {
      return $this->password;
    }

    public function setPassword(string $password)
    {
      $this->password = $password;
    }    


    public function getIsAdmin()
    {
      return $this->isAdmin;
    }

    public function setIsAdmin(string $isAdmin)
    {
      $this->isAdmin = $isAdmin;
    }      

    public function getAvatarPath()
    {
      return $this->avatarPath;
    }

    public function setAvatarPath(string $avatarPath)
    {
      $this->avatarPath = $avatarPath;
    }


    public function getlastConnection()
    {
      return $this->lastConnection;
    }

    public function setLastConnection(string $lastConnection)
    {
      $this->lastConnection = $lastConnection;
    }

}

?>