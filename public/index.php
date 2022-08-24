<?php
define ("DS", DIRECTORY_SEPARATOR).
define('ROOT', dirname(__DIR__));
define('APP', ROOT. DS .'app');
define('CONFIG', APP . DS . 'config' . DS);
define('CORE', APP . DS . 'core' . DS);
define('CONTROLLERS', APP . DS . 'controllers' . DS);
define('MODELS', APP . DS . 'models' . DS);
define('VIEWS', APP . DS . 'views' . DS);


// config 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","fs8_proone");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");

require_once('../vendor/autoload.php');


$app = new MVC\core\app();