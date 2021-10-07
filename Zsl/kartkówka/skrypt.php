<?php
    if (isset($_POST['przycisk'])) {
        if (!empty($_POST['podstawa']) && !empty($_POST['wysokosc'])) {
            $podstawa=$_POST['podstawa'];
            $wysokosc=$_POST['wysokosc'];
            $obliczenia=($podstawa*$wysokosc)*0.5;
            echo "Pole trójkąta o podanych wymiarach to ".$obliczenia."cm <sup>2</sup>";
        }
        else{
            ?>
            <script>
                history.back();
            </script>
            <?php
        }
    }
?>