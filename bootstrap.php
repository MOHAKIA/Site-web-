<?php

define('BASE_URL','http://127.0.0.1/');
define('chemain', realpath(__DIR__));

if(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])){
    define('Redirige', 'https');
}else{
    define('Redirige', 'http');
}

?>