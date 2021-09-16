<?php
    $text = <<< L
        ZSŁ - Zespół
        Szkół
        Łącznosci <br>
L;
echo $text;
echo "<br>";
echo nl2br($text);
echo "<br>";
echo "<br>";

$name = 'jaNuSZ';
//zamiana wszystkich liter na małe
$name = strtolower($name);
echo $name;
echo "<br>";

//zamiana wszystkich liter na duże
echo strtoupper($name);
echo "<br>";

$nameSurname = 'januSZ koWALski';
//zamiana pierwszej litery na dużą
echo ucfirst($nameSurname); //JanuSZ koWALski
echo "<br>";

//zmiana każdej pierwszej litery na duże
echo ucwords($nameSurname); //JanuSZ KoWALski
echo "<br>";

//zamiana wszystkich liter na małe, a pierwszej na dużą
$name = "jAnuSz"; 
echo $name; //jAnuSz
echo "<br>";
echo ucfirst(strtolower($name)); //Janusz
echo "<br>";
echo "<hr>";
$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora expedita nesciunt culpa magnam voluptate fuga porro facere ipsum sit pariatur eaque eligendi, provident, optio omnis! Quaerat, dolorem nam? Atque, velit?";
echo $lorem;
echo "<br>";
$col =wordwrap($lorem, 30, "<br>");
$col =wordwrap($lorem, 30, "TEXT");
$col =wordwrap($lorem, 30, "<hr>"); //pierwsza pozycja to zmienna, druga pozycja to po ilu znakach ma dzielic na kolumny łącznie ze spacjami, a trzecia to czym ma dzielić
echo $col;
echo "<br>";

//wyczyszczenie bufora
ob_clean();

//usuwanie białych znaków
$name="Janusz";
$name1="  Janusz ";
echo "Długość \$name: ".strlen($name)."<br>"; //6
echo "Długość \$name1: ".strlen($name1)."<br>"; //9
echo strlen(ltrim($name1)); // usuwa białe znaki z lewej sttrony (7)
echo "<br>";
echo strlen(rtrim($name1)); // usuwa białe znaki z prawej strony (8)
echo "<br>";
echo strlen(trim($name1)); //usuwa wszystkie białe znaki (6)
echo "<hr>";

//przeszukiwanie ciągów znaków
$mail="janusz@gmail.com";
echo strstr($mail, "@"); //pierwszy argument to gdzie szukamy, drugi to czwego szukamy. Jeśli znalazł to wyświetla od znalezionego znaku do końca, pomijając to co przed nim
echo strstr($mail, "G"); //jeśli nie znajdzie tego, czego szuakmy nic nie wyświetli
echo "<br>";
echo stristr($mail, "G"); // pomija wielkość podanych liter i wyszukuje opgólnie litery
echo "<br>";

//substr
echo substr($mail, 2); //usuwa podana ilość znaków (@nusz@gmail.com)
echo substr($mail, 6); //(@gmail.com)
echo "<br>";
echo substr($mail, -3); //liczby z - liczą od tyłu i wycinają to co przed tym
echo "<br>";
echo substr($mail, -2, 1); //wycina wszystko poza podanym znakiem
echo "<br>";
echo "<hr>";

//zadanie 2
$personality = "Janusz Kowalski";
$name = substr($personality, -15, 6);
echo $name;
echo "<br>";
$surname = substr($personality, 7, 9);
echo $surname;
?>