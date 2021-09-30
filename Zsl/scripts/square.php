<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
        <input type="submit" name="button" value="Oblicz"><br><br>
    </form>
    <?php
        if(isset($_GET['button'])){
            if(!empty($_GET['sideA'])){
                //echo $_GET['sideA'];
                $bokA=str_replace(',', '.', $_GET['sideA']);
                //echo $bokA;
                $pole=$bokA**2;
                $obwód=$bokA*4;

                echo <<< RESULT
                <hr>
                Pole wynosi: $pole cm<sup>2</sup><br>
                Obwód wynosi: $obwód cm
RESULT;
            }
            else{
                echo "Wypełnij bok a!";
            }
        }
    ?>
</body>
</html>