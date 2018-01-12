<?php


namespace TastyRecipes\Controller;


use TastyRecipes\Integration\DBH;
use TastyRecipes\Model\Comment;
use TastyRecipes\Model\User;
use TastyRecipes\Model\UserLogIn;


class Controller {
    
    public function logOut() {
    session_start();
    session_unset();
    session_destroy();
    
    }
    public function logIn($userName, $passWord) {
         
        $user = new UserLogIn($userName, $passWord);
        DBH::logIn($user);
         
    }
    
    public function storeComments($uid, $date, $message, $page) {
         
        $comment = new Comment($uid,$date, $message);
        return DBH::registerComment($comment, $page);
                 
    }
    
    public function getComments($pageId) {
        return DBH::getComments($pageId);
    }
    
    public function deleteComments($pageid, $usercid) {
        DBH::deleteComment($pageid, $usercid);
    }
    
    public function signUp($firstName, $lastName, $email, $userName, $passWord) {
       
        $newUser = new User($firstName, $lastName, $userName, $email, $passWord);
        DBH::signUp($newUser);
                 
    }
    
    public function getNumRows($pageID){
        $numrows = DBH::countComments($pageID);
        return $numrows;
    }
}