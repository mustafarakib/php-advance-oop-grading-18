<?php
namespace OOP;

class Dove extends Bird implements canFly{

    public $name = "Dove";

    public function fly(){
        echo "I can Fly<br>";
    }
}
