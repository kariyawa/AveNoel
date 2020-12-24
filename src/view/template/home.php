<?php 

ob_start(); 

?>

<section class="container-fluid banner">
        <div class="ban">
            <img src="assets/image/photoaccueil.jpg" alt="bannière du site" />
        </div>
        <div>
            <h1> Bienvenu sur Ave Noel</h1>
            <button class="btn btn-custom"> Contactez moi !</button>
        </div>
    </section>
    <!-- end bannière -->


    <!-- à propos -->
    <section class="container-fluid about">
        <div class="container">
            <div class="row">
              
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2> Notre histoire, en bref </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse 
                        lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras 
                        elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod 
                        non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum 
                        diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, 
                        pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras 
                        vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. 
                        Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus 
                        orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede 
                        pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    </p>
                </article>

                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2> Nos partanaires </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse 
                        lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum 
                        ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin 
                        porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit 
                        amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. 
                        Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum 
                        augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut 
                        augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                        cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing 
                        ante non diam sodales hendrerit.
                    </p>
                </article>

                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h2> Fais parti de l'équipe ! </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus 
                        tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices 
                        diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci 
                        nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. 
                        Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in 
                        risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in 
                        pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum 
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris 
                        ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                    </p>
                </article>

            </div>
        </div>
    
    </section>


<?php

$body = ob_get_clean();
require "template.php";

?>