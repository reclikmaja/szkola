<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Prostokąt</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
        <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
        <input type="submit" name="button" value="Oblicz"><br><br>
    </form>
    <?php
        if(isset($_GET['button'])){
            if(!empty($_GET['sideA']) && !empty($_GET['sideB'])){
                //echo $_GET['sideA'];
                $bokA=str_replace(',', '.', $_GET['sideA']);
                $bokB=str_replace(',', '.', $_GET['sideB']);
                //echo $bokA;
                $pole=$bokA*$bokB;
                $obwód=2*$bokA+2*$bokB;

                echo <<< RESULT
                <hr>
                Pole wynosi: $pole cm<sup>2</sup><br>
                Obwód wynosi: $obwód cm
RESULT;
            }
            else{
                echo "Wypełnij bok a i b!";
            }
        }
    ?>
</body>
</html>