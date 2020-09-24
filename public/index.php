<?php
error_reporting( E_WARNING | E_PARSE); // Desativar erros e pa
require_once(dirname(__FILE__,2) . '/src/config/config.php'); // se colocar o 2 ele pega o diretorio pai


$uri = urldecode($_SERVER['REQUEST_URI']);

if ($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/login.php';
}

require_once(CONTROLLER_PATH . "{$uri}");