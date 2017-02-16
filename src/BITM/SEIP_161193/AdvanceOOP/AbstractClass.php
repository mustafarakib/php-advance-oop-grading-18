<?php
namespace OOP;

abstract class AbstractClass{

    // Force Extending class to define this method
    abstract protected function getMyValue();
    abstract protected function setMyValue($prefix);

    // Common method
    public function printOut() {
        print $this->getMyValue() . "\n";
    }
}
