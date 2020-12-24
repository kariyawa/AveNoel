<?php 

ob_start(); 

?>

<br>

<div class="container">

	<div class="row">

      <div class="row">

		    <article class="col-md-6">
          
    			<figure class="col-lg-12"><figcaption class="article-caption"><h1 class="article-title"><a href="src/view/webtoon.php">Les webtoons</a></h1></figcaption>
				    <a href="index.php?p=post/showPost"><img class="img img-responsive article-img" width="200" height="300" src="assets/image/awaken.png"></a>
          </figure>
          
				  <div class="article-intro col-lg-12" style="padding-top: 10px;">
				  <strong>En Corée-du-sud, pays inventeur du genre, on consomme du webtoon comme on se rend à la machine à café en France. Ce genre de BD est conçu 
					pour le smartphone tout spécialement, ce qui n'empêche pas toutes sortes d' adaptations.</strong>
          </div>

        </article>
        
        <article class="col-md-6">
            
          <figure class="col-lg-12">
            <a href=""><img class="img img-responsive article-img" width="200" height="300" src="assets/image/caverne.jpg"></a>
              <figcaption class="article-caption"><h1 class="article-title"><a href=""> L'allégorie de la caverne</a></h1>
              </figcaption>
				  </figure>

			  <div class="article-intro col-lg-12" style="padding-top: 10px;">
				<strong>"L'allégorie de la caverne" de Platon est un texte fondamental, autonome dans "La République" de Platon, qui fait des hommes ignorants les 
          prisonniers d’une grotte et pose de multiples questions ouvertes, en quête de sens. Qu’a-t-on encore à en apprendre aujourd'hui ?</strong>
				</div>
				
				</article>
        </div>
                
        <hr><div class="row">
        <article class="col-md-6">
        <figure class="col-lg-12">
        <a href=""><img class="img img-responsive article-img" src="http://farm1.staticflickr.com/258/18511405422_d7c67c0ff8_k.jpg"></a>
				    <figcaption class="article-caption"><h1 class="article-title"><a href="">Les Infrastructures</a></h1>
				    </figcaption>
				</figure>
				<div class="article-intro col-lg-12" style="padding-top: 10px;">
				<strong> Venez découvrir les infrastructures qui sont véritablement nécessaires pour une ville</strong>
				</div>
				
				</article>
                
        <article class="col-md-6">
        		<figure class="col-lg-12">

            <a href=""><img class="img img-responsive article-img" width="200" height="300" src="assets/image/lumiere.jpg"></a>
              <figcaption class="article-caption"><h1 class="article-title"><a href=""> Des néons dans ton art </a></h1>
              </figcaption>
              
				    </figure>

				<div class="article-intro col-lg-12" style="padding-top: 10px;">
        <strong> Pourquoi la lumière joue-t-elle un rôle essentiel dans l'art? <br> La lumière rend visible les choses. Aux temps préhistoriques, la découverte du 
        feu a permis l’art pariétal dans les grottes et les cavernes profondes...</strong>
				</div>
				
				</article>
      
      </div>

  </div>
  
</div>


<?php

$body = ob_get_clean();
require "template.php";

?>