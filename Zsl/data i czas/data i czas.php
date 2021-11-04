<?php
    //data()
    echo "dzień-miesiąc-rok: ".date('d-m-Y')."<br>";
    echo date('d-M-Y')."<br>";
    echo date('d-F-Y')."<br>"; //28-October-2021

    setlocale(LC_ALL, 'polish');
    echo strftime('%d %B %Y');

    echo date('G:i:s')."<br>"; //17:15:07
    echo date('G:i:sa')."<br>"; //17:05:37pm
    echo date('H:i:sa')."<br>"; //17:05:37
    echo date('L')."<br>";//0-rok nie jest przestępny, 1-jest przestępny
?>
<script>
    setTimeout(function(){
        //window.location.reload();
    }, 1000);
</script>
<?php
    //getdate()
    $date=getdate();
     //print_r($date);
    echo $date['wday']."<br>"; //pokazuje dzień tygodnia jako cyfra
    echo $date['yday']+1 ."<br>"; //pokazuje obecny dzień w roku jako cyfra
    echo $date[0]+1 ."<br>"; //znacznik czasu od 1970r - ile dni upłynęło

    //mktime()
    $today=mktime(0, 0, 0, 10, 28, 2021);
    echo $today."<br>";
    $today=mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('Y'));
    echo $today."<br>";
    echo $date[0]."<br>";

    // ile lat minęło od 1 stycznia od 1970r.
    $year=$today/(60*60*24*365);
    echo (int)$year."lat <br>";

    $today2=mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('Y')-1);
    $year2=$today2/(60*60*24*365);
    echo (int)$year2."lat <br>";
?>