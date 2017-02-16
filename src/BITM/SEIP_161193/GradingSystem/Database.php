<?php

namespace App;
use PDO, PDOException;

class Database{

    public $DBH;

    public function __construct(){

      if(!isset($_SESSION)) session_start();

      try{
        $this->DBH = new PDO('mysql:host=localhost;dbname=grading_system_b45', 'root', '');
      }
      catch (PDOException $error){
           echo $error->getMessage();
      }
    }
}
