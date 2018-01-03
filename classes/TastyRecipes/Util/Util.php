<?php


namespace TastyRecipes\Util;

class Util{
    
    public static function init() {
     spl_autoload_register(function($class){
         require_once '/Library/WebServer/Documents/Seminarie3/classes/'
            .\str_replace('\\', '/', $class).'.php';});
        session_start();
    }

}