<?php
    $wzrost=str_replace("cm", "", $_POST['wzrost']);
    if ($wzrost>=100 && $wzrost<=250) {
        if ($wzrost>=200) {
            echo "Twój wzrost to: ".$wzrost."cm<br> Jesteś olbrzmem";
        }
        elseif ($wzrost>=180 && $wzrost<=199) {
            echo "Twój wzrost to: ".$wzrost."cm<br> Jesteś wysoki";
        }
        else {
            echo "Twój wzrost to: ".$wzrost."cm<br> Jesteś średniego wzrostu";
        }
    }
?>