<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Początek pliku</h3>
    <?php
        include '3_1.php'; //przy błędach nadal wykonuje kod;
        include_once '3_1.php';
        require '3_1.php'; //przy błędach nie wykonuje dalszej części kodu (wyświetla fatal error);
        require_once '3_1.php'; // nie wymaga drugi raz pliku
    ?>
    <h3>Koniec pliku</h3>
</body>
</html>