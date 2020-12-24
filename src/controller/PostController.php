<?php

namespace App\src\controller;

use App\src\repository\PostRepository;

class PostController{

  public function defaut(){
    require 'src/view/template/galleryPost.php';
  }
  
  public function showPost(){
    require 'src/view/webtoon.php';
  }

  public function createPost(){
    
  }

  public function modifyPost(){
    
  }

  public function deletePost(){

  }
}
?>