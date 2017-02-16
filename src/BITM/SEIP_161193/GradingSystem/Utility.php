<?php

namespace App;

class Utility{

    public static function redirect($url){

        header("Location: $url");
    }
}
