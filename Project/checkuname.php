<?php

    require "controllers/deliverymanController.php";
    $uname=$_GET["uname"];
    $check=checkUname($uname);
    if($check){
        echo "true";
    }else echo "false";

?>