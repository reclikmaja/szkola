<!DOCTYPE html>
<html>
<body>

<?php
$name=Maja;
echo '<br>Imię: $name'; //Imię: $name
echo "<br>Imię: $name"; //Imię: Maja
echo "<br>";
$x = Tomasz;
$y = Nowak;
echo "$x $y";
echo "<br>";
echo $x. $y."<hr>"; //konkatenacja to .

//typy danych
	//całkowity
    $calkowita=10;
    $bin=0b1010; //10 w binarnym
    $oct=011; //9 w oktalnym (8)
    $hex=0x11; //17 w hexadecymalnym (16)
    echo $calkowita." ". $bin." ". $oct." ". $hex;
    echo "<br>";
    
    //zmiennoprzecinkowy
    $x=100.4;
    echo $x;
    echo "<br>";
    
    //logiczny
    $prawda=true;
    $falsz=false;
    echo "<br>";
//sprawdzanie typu danych
	echo gettype($prawda)." "; //boolean
    echo gettype($hex)." "; //integer
    echo gettype($x); //double
    
//składnia heredoc nazwy etykiet pisać dużą literą!
$name="Krystyna";
echo <<< ETYKIETA

	<hr>Imię: $name<br>
    ZSŁ<br>

ETYKIETA;
    
$text = <<< ETYKIETA

	<hr>Anna Nowak<br>
    ZSŁ<br>

ETYKIETA;

echo $text;

//składnia nowdoc
$name="Krystyna";
echo <<< 'ETYKIETA'

	<hr>Imię: $name<br>
    ZSŁ<br>

ETYKIETA;

$name="Jagoda";
echo "Imię: $name, nazwisko: Malinowska <hr>";
echo "Imię: \$name, nazwisko: Malinowska <hr>"; //gdy postawimy \ przed zmienną jest traktowana jako zwykły tekst
?>

</body>
</html>