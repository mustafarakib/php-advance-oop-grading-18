<?php
namespace OOP;

class Penguin extends Bird implements canSwim{
    public $name = "Penguin";

    public function swim(){
        echo "I can Swim<br>";
    }
}
