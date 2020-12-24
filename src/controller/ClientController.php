<?php

namespace App\src\controller;

use App\src\repository\ClientRepository;
use App\src\model\Client;

class ClientController{

  public function defaut(){
    require 'src/view/template/login.php';
  }
  
  public function loginClient(){
    require 'src/view/template/login.php';
  }

  public function registerClient(){
    
    require 'src/view/template/register.php';

    /*
    $client = new Client;
    $client->setFirstName($_POST['prenom']);
    $client->setLastName($_POST['nom']);
    $client->setUsername($_POST['username']);
    $client->setPassword($_POST['password']);
    $client->setIsAdmin($_POST['admin']);
    $client->setEmail($_POST['mail']);
    */
    
  }

  public function logoutAccount(){

  }

  public function deleteAccount(){
  }
}
?>