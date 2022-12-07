<?php
// load config 
require_once 'config/config.php';
// autoload Core libraries
spl_autoload_register(function($className){
require_once 'libraries/'.$className.'.php';

});



