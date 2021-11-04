<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h4> Użytkownicy </h4>
        <?php
            $connect = new mysqli("localhost", "root", "", "zsl_3pi1T_g2");
            $sql = "SELECT * FROM `users`";
            $result = $connect->query($sql); //wysyła zapytanie p dane i przypisuje do zmiennej
            //$user = $result->fetch_assoc(); //tworzy tablicę asocjacyjną
            //print_r($user);
            while ($user = $result->fetch_assoc()) {
                echo <<< USER
                Id: $user[id]<br>
                Imię i nazwisko: $user[name] $user[surname]<hr>
USER;            
            }
            
        ?>
    </body>
</html>