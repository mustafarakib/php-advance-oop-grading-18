<?php
require_once("../../../vendor/autoload.php");

$obj = new \App\Result();

$obj->setData($_POST);

$obj->store();
