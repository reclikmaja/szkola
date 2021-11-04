<?php
    echo "<pre>"; //wyświetla w formie kodu
    print_r($_POST);
    echo "</pre>";
    if(!empty($_POST['name']) && !empty($_POST['geometricFigure'])){
        switch($_POST['geometricFigure']){
            case 'kwadrat':
                header('location: ./square.php'); //przenosi do podanej lokalizacji (pliku)
                break;
            case 'prostokąt':
                header('location: ./rectangle.php');
                break;
        }
    }
    else{
        ?>
            <script>
                history.back(); //cofa historie (w tym przypadku cofa do poprzedniego pliku włącznie z zaznaczonymi danami)
            </script>
        <?php
    }
?>