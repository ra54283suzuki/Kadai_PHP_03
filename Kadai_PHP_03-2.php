<?php
    $SUM = 0;
    for($i = 0;$i <= 10000;$i++) {
        $SUM += $i;
        if($i == 10000)
        echo $SUM;
    }
?>