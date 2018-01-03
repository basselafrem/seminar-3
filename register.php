<?php



use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();

$controller = SessionManager::getController();

if(isset($_POST['submitSignup'])) {
  
        $firstName = htmlspecialchars($_POST['first'], ENT_QUOTES, 'UTF-8');
        $lastName = htmlspecialchars($_POST['last'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $userName = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
        $passWord = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
        
        $controller->signUp($firstName, $lastName, $email, $userName, $passWord);
        SessionManager::storeController($controller);
        
        header("Location: resources/views/signupLogin.php");
    
}
else {
    include 'resources/views/error.php';
}