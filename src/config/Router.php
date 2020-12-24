<?php

namespace App\src\config;

use App\src\controller\ClientController;
use App\src\controller\PostController;
use App\src\controller\CommentController;
use App\src\controller\HomeController;

require_once 'vendor/autoload.php';

class Router{


  public function loadRoutes(){

    $params= explode('/', $_GET['p']);
    
    if ($params[0] != ""){
      if(isset($params[1])){
        $action = $params[1];
      }else{
        $action = 'defaut';;
      }

      $page = $params[0];

      if ($page == 'client'){
        $controller = new ClientController;
      }else if ($page == 'post'){
        $controller = new PostController;
      }else if ($page == 'comment'){
        $controller = new CommentController;
      }

      
    }else{
      $controller = new HomeController;
      $action = 'defaut';
    }
    
    $controller->$action();
  }

  
}

?>