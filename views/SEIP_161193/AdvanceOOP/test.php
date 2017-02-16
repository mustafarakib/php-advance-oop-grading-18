<?php
require_once("../../../vendor/autoload.php");

use OOP\canFly;
use OOP\canSwim;
use OOP\Bird;
use OOP\Dove;
use OOP\Penguin;
use OOP\Duck;

$obj = new \OOP\Test();

$obj->sayHello();
$obj->sayWorld();
$obj->sayExclamationMark();

$objAbstract = new \OOP\InheritedFromAbstractClass();
$objAbstract->setMyValue("Hello Abstract Class! <br>");
    echo $objAbstract->getMyValue();

function describeBird($bird){

    if($bird instanceof Bird){
        $bird->info();
    }

    if($bird instanceof canFly){
        $bird->fly();
    }

    if($bird instanceof canSwim){
        $bird->swim();
    }
}

$obj = new Penguin();

describeBird(new Dove());
describeBird(new Penguin());
describeBird(new Duck());

//generator function start
function xyz(){
    for($i=1;$i<=5;$i++){
        yield $i;
    }
}
//generator function end

foreach (xyz() as $item) {
    echo $item;
}
