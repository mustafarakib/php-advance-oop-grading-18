<?php
namespace OOP;

class InheritedFromAbstractClass extends AbstractClass{
    private $myValue;

    public function getMyValue(){
        return $this->myValue;
    }

    public function setMyValue($prefix){
        $this->myValue=$prefix;
    }
}
