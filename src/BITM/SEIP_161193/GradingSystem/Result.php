<?php

namespace App;

class Result extends Database{
    private $id;
    private $name;
    private $roll;

    private $markBangla;
    private $markEnglish;
    private $markMath;

    private $gradeBangla;
    private $gradeEnglish;
    private $gradeMath;


    public function setData($postData){

        if(array_key_exists("id",$postData)){
            $this->id = $postData['id'];
        }

        if(array_key_exists("name",$postData)){
            $this->name = $postData['name'];
        }

        if(array_key_exists("roll",$postData)){
            $this->roll = $postData['roll'];
        }


        if(array_key_exists("markBangla",$postData)){
            $this->markBangla = $postData['markBangla'];
            $this->gradeBangla = $this->convertMark2Grade($this->markBangla);
        }

        if(array_key_exists("markEnglish",$postData)){
            $this->markEnglish = $postData['markEnglish'];
            $this->gradeEnglish = $this->convertMark2Grade($this->markEnglish);

        }

        if(array_key_exists("markMath",$postData)){
            $this->markMath = $postData['markMath'];
            $this->gradeMath = $this->convertMark2Grade($this->markMath);

        }
    }

    public function convertMark2Grade($mark){
        switch($mark){
            case $mark>79: return "A+";
            case $mark>74: return "A";
            case $mark>69: return "A-";
            case $mark>64: return "B+";
            case $mark>59: return "B";
            case $mark>54: return "B-";
            case $mark>49: return "C+";
            case $mark>44: return "C";
            case $mark>39: return "D";
            default: return "F";
        }
    }

    public function store(){
        $arrayData = array($this->name,$this->roll,
            $this->markBangla,$this->markEnglish,$this->markMath,
            $this->gradeBangla,$this->gradeEnglish,$this->gradeMath);

        $sql = "Insert into result( name ,roll,mark_bangla,mark_english,mark_math,
                                              grade_bangla,grade_english,grade_math) VALUES (?,?,?,?,?,?,?,?)";

        $STH = $this->DBH->prepare($sql);
        $success =  $STH->execute($arrayData);

        if($success){
           Message::message("Success! Data Has Been Inserted Successfully!<br>");
        }
        else{
           Message::message("Failed! Data Has Not Been Inserted<br>");
        }

        Utility::redirect("InformationCollection.php");
    }
}
