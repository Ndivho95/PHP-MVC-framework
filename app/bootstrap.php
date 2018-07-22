
<?php
//Load Config 
require_once 'config/config.php';

//Autoload Core libraries

//automatically loads libraries using their name
spl_autoload_register(function($className){
    require_once 'libraries/'. $className .'.php';
});