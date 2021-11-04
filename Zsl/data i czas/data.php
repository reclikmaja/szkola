<?php
    $data1=$_POST['data'];
    $data2=$_POST['data2'];
    if(!empty($_POST['data']) && !empty($_POST['data2'])){
        $date=explode("-", $data1);
        $date2=explode("-", $data2);
        if($date[0]>$date2[0]){
            $rok=$date[0]-$date2[0];
            if ($date[1]>$date2[1]) {
                $miesiac=$date[1]-$date2[1];
            }
            else {
                $miesiac=$date2[1]-$date[1];
            }
            if ($date[2]>$date2[2]) {
                $dzien=$date[2]-$date2[2];            
            }
            else {
                $dzien=$date2[2]-$date[2];
            }
            echo "Różnica między podanymi datami wynosi: ".$dzien." dni, ".$miesiac." miesiecy i ".$rok." lat";
        }
        else{
            $rok=$date2[0]-$date[0];
            if ($date[1]<$date2[1]) {
                $miesiac=$date2[1]-$date[1];
            }
            else {
                $miesiac=$date[1]-$date2[1];
            }
            if ($date[2]<$date2[2]) {
                $dzien=$date2[2]-$date[2];            
            }
            else {
                $dzien=$date[2]-$date2[2];
            }
            echo "Różnica między podanymi datami wynosi: ".$dzien." dni, ".$miesiac." miesiecy i ".$rok." lat";
        }
    }
?>