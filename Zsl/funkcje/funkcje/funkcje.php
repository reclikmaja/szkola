<?php
    function show(){
        echo "Funkcja show <br>";
    }
    function showname($name){
        return "Imię: ".$name."<br>";
    }
    function stringValidate($name, $len){
        $name=str_replace(" ", "", $name)
        $name=substr(ucfirst(strtolower(trim($name))), 0, $len);
        return "Imię: ".$name."<br>";
    }
?>