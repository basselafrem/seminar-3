<?php



use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();

$controller = SessionManager::getController();

if(isset($_POST['submitSignup'])) {
  
        $firstName = htmlentities($_POST['first'], ENT_QUOTES, 'UTF-8');
        $lastName = htmlentities($_POST['last'], ENT_QUOTES, 'UTF-8');
        $email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
        $userName = htmlentities($_POST['uid'], ENT_QUOTES, 'UTF-8');
        $passWord = htmlentities($_POST['pwd'], ENT_QUOTES, 'UTF-8');
         if(ctype_print($firstName) AND ctype_print($lastName)AND ctype_print($email)AND ctype_print($userName) AND ctype_print($passWord)  
                 AND(!empty($firstName) AND !empty($lastName)AND !empty($email)AND !empty($userName)AND !empty($passWord)) ){
        
        
        $controller->signUp($firstName, $lastName, $email, $userName, $passWord);
        SessionManager::storeController($controller);
        
        header("Location: resources/views/signupLogin.php");
                 }
    
}
else {
    include 'resources/views/error.php';
}