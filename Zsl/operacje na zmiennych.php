<!DOCTYPE html>
<html>
<body>

<?php
//wersja php
echo PHP_VERSION;
echo "<br>";

//potęgowanie
$pow=2**10;
echo $pow;
echo "<br>";


$x=10;
$y=3;
echo $x<=>$y; //jeżeli zmienna po lewej jest większa dostajemy 1, mniejsza -1, a równe 0
echo "<br>";

//porównanie oraz identyczność
$x=1;
$y=1.1;
if($x===$y){
  echo "Równe";
  }
else{
  echo "Różne";
}
$x = 10;
$x++;
echo $x; //11
echo "<br>";

$x=$x++;
echo $x; //11
echo "<br>";

$y=$x++;
echo $x; //12
echo "<br>";
echo $y; //11
echo "<br>";
echo "<br>";

// zadanie 1
$x=1;
echo $x; //1
echo "<br>";

$x=$x++;
echo $x; //1
echo "<br>";

$x=++$x; 
echo $x; //2
echo "<br>";

$y=++$x;
echo $x; //3
echo "<br>";
echo $y; //3
echo "<br>";

$y=$x++;
echo $x; //4
echo "<br>";
echo $y; //3
echo "<br>";
?>

</body>
</html>
