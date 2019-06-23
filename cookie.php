<?php
    session_start();
    $cookie_name="TESTCOOKIE";
    $cookie_value="test";
     
    $expiry=time()+60*2;

    setcookie($cookie_name,$cookie_value,$expiry,'/');
?>