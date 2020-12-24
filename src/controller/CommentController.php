<?php

namespace App\src\controller;

use App\src\repository\CommentRepository;

class CommentController{

  public function defaut(){
    require 'src/view/webtoon.php';
  }
  
  public function addComment(){
    require 'src/view/webtoon.php';
  }

  public function modifyComment(){
    require 'src/view/webtoon.php';
  }

  public function deleteComment(){
    require 'src/view/webtoon.php';
  }
}
?>