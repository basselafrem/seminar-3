<?php
namespace TastyRecipes\View;

use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();



    $controller = SessionManager::getController();
    $usercid= $_POST['cid'];
    $controller->deleteComments(2, $usercid);
    SessionManager::storeController($controller);
    header("Location: resources/views/meatballsrecipe.php");
   

 