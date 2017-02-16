<?php
namespace App;

class Message
{
    public static function message($msg = null){

         if(is_null($msg)){
             return self::getMessage();
         }
         else{
             self::setMessage($msg);
         }
    }

    public static function setMessage($msg){
        $_SESSION['message'] = $msg;
    }

    public static function getMessage(){
        return $_SESSION['message'];
    }
}
