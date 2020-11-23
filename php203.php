<?php
    //Global Varible Scope
    $message = "Hello Tao";
    echo $message;

    function myTest(){
       $message = "<br />Mark<br />";//
        echo "<br />$message<br />";
    }
    myTest();//Calling function
    echo $message;
?>