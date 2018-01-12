<?php

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
        if(ctype_print($uid) AND ctype_print($date)AND ctype_print($message) 
                 AND(!empty($uid) AND !empty($date)AND !empty($message)) ){
        $controller->storeComments($uid, $date, $message, $page);
        header("Location: resources/views/meatballsrecipe.php");
                 }
        
    }
    if(isset($_POST['pancakesSubmit'])) {
        $uid = $_SESSION['u_uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $page = 'pancakesrecipe';
        if(ctype_print($uid) AND ctype_print($date)AND ctype_print($message) 
                 AND(!empty($uid) AND !empty($date)AND !empty($message)) ){
        $controller->storeComments($uid, $date, $message, $page);
        header("Location: resources/views/pancakesrecipe.php");
                 }
        
    }
}


