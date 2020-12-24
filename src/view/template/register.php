<?php 

ob_start(); 

?>

<div id="inscription2">

    <h3 class="text-center text-white pt-5">Login form</h3>

        <div class="inscriptioncontainer">

        <form method="post" id="registerFormulaire">

            <div id="inscription-row" class="row justify-content-center align-items-center">

                <div id="inscription-column" class="col-md-6">

                    <div id="inscription-box" class="col-md-12">

                        <form id="inscription-form" class="form" action="" method="post">

                            <h3 class="text-center text-info">Inscription</h3>

                            <div class="form-group">
                                <label name="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label name="mail" class="text-info">Mail:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label name="nom" class="text-info">Nom:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label name="prenom" class="text-info">Prénom:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label name="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label name="isAdmin" class="text-info"><span>Es-tu Administrateur ?</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        
        </form>

        </div>

</div>
<br><br><br>

<?php

$body = ob_get_clean();
require "template.php";

?>