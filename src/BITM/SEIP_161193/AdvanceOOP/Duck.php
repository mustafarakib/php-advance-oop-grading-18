<?php
namespace OOP;

class Duck extends Bird implements canFly,canSwim{

    public $name = "Duck";

    public function fly(){
        echo "I can Fly<br>";
    }

    public function swim(){
        echo "I can Swim<br>";
    }
}
