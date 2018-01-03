<?php

session_start();
ob_start();

use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();

$controller = SessionManager::getController();

if(isset($_POST['submitLogin'])) {
    
        $userName = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
        $passWord = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
        $controller->logIn($userName, $passWord);
        SessionManager::storeController($controller);
        header("Location: resources/views/welcome.php");  
}
else {
    include 'resources/views/error.php';
}
