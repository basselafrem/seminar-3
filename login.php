<?php

session_start();
ob_start();

use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();

$controller = SessionManager::getController();

if(isset($_POST['submitLogin'])) {
    
    
        $userName = htmlentities($_POST['uid'], ENT_QUOTES, 'UTF-8');
        $passWord = htmlentities($_POST['pwd'], ENT_QUOTES, 'UTF-8');
        if(ctype_print($userName) AND ctype_print($passWord)
                 AND(!empty($userName) AND !empty($passWord)) ){
        $controller->logIn($userName, $passWord);
        SessionManager::storeController($controller);
        header("Location: resources/views/welcome.php");
                 }
    
}
else {
    include 'resources/views/error.php';
}
