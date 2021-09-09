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
?>

</body>
</html>