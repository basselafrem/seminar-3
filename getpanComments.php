<?php



use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

 require_once 'classes/TastyRecipes/Util/Util.php';
      Util::init();
        $controller = SessionManager::getController();
        $controller->getComments(3);
        SessionManager::storeController($controller);
        
