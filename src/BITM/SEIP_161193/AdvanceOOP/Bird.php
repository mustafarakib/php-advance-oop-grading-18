<?php
namespace OOP;

interface canFly{
    public function fly();
}

interface canSwim{
    public function swim();
}

class Bird{
    public function info(){
        echo "I'm Bird, My name is ".$this->name."<br>";
    }
}
