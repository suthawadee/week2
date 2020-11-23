<?php
    $x =5;
    $y =4;
    $z;
    function mytest(){
        global $x,$y,$z;
        $z = $x + $y;
        echo $z;
    }
    echo $z;
    mytest();
    echo $z; 
?>