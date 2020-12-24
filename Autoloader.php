<?php 

namespace App\src\config;

class Autoloader
{

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']); //enregistre tt les classes de mon projet
    }

    public static function autoload($class)
    {
        $class= str_replace('App', '', $class); //on met toutes les classes ds app
        $class=str_replace('\\', '/', $class);

    require $class.'.php'; //remplace tous les requires
    }
}
?>