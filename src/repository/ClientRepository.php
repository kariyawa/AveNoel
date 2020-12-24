<?php 

namespace App\src\Repository; //Chaque classe a ses méthodes sql

use App\src\config\Database;
use App\model\Client;

class ClientRepository //toutes les fctions liées à l'entité Clients
{
  private $database;

  public function getClients()
  {
    $database = new Database();
    $connection = $database->getConnection();
    $result = $connection->query('SELECT * FROM client');
    return $result->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function registerClient()
  {
    $database = new Database();
    $connection = $database->getConnection();
    $stmt = $dbh->prepare("INSERT INTO client (username, mail, nom, prenom, password, isAdmin) VALUES (:username, :mail, :nom, :prenom, :password, :isAdmin)");
    $stmt->bindValue(':username', $client->getUsername(), \PDO::PARAM_STR);
    $stmt->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
    $stmt->bindValue(':nom', $client->getNom(), \PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $client->getPrenom(), \PDO::PARAM_STR);
    $stmt->bindValue(':password', $client->getPassword(), \PDO::PARAM_STR);
    $stmt->bindValue(':isAdmin', $client->getIsAdmin(), \PDO::PARAM_STR);
    $stmt->execute();

  }

  public function loginClientAccount()
  {
    /*
    $database = new Database();
    $connection = $database->getConnection();
    $stmt = $dbh->prepare("SELECT username, password FROM client where id = '$client->getId()' ");
    if ($stmt->execute(array($_GET['name']))) {
      while ($row = $stmt->fetch()) {
        print_r($row);
      }
    }

    */
  }
  
}

?>