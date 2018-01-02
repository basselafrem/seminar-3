<?php


    
namespace TastyRecipes\View;

use TastyRecipes\Controller\SessionManager;
use TastyRecipes\Util\Util;

require_once 'classes/TastyRecipes/Util/Util.php';
Util::init();

$controller = SessionManager::getController();
if (isset($_SESSION['u_id'])) {
    
    if(isset($_POST['meatballsSubmit'])) {
        
        $uid = $_SESSION['u_uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $page = 'meatballsrecipe';
        $controller->storeComments($uid, $date, $message, $page);
        header("Location: resources/views/meatballsrecipe.php");
        
    }
    if(isset($_POST['pancakesSubmit'])) {
        $uid = $_SESSION['u_uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $page = 'pancakesrecipe';
        $controller->storeComments($uid, $date, $message, $page);
        header("Location: resources/views/pancakesrecipe.php");
        
    }
}

