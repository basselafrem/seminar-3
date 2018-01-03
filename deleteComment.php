<?php


use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();

if (isset($_POST['meatballsDelete'])){

    $controller = SessionManager::getController();
    $usercid= $_POST['cid'];
    $controller->deleteComments(2, $usercid);
    SessionManager::storeController($controller);
    header("Location: resources/views/meatballsrecipe.php");
}
if (isset($_POST['pancakesDelete'])){
      $controller = SessionManager::getController();
    $usercid= $_POST['cid'];
    $controller->deleteComments(3, $usercid);
    SessionManager::storeController($controller);
    header("Location: resources/views/pancakesrecipe.php");
    
}

 