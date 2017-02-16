<?php

namespace OOP;

trait Hello{

    public function sayHello(){
        echo 'Hello ';
    }
}

trait World{

    public function sayWorld(){
        echo 'World ';
    }
}

class Test{
    use Hello,World;

    public function sayExclamationMark(){
        echo "!";
    }
}
?>
