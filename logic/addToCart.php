<?php
    session_start();
    if($_POST["Name"]!="close"){
    $_SESSION["cartList"]["sum"] = "".((float)$_SESSION["cartList"]["sum"] + (float)$_POST["Price"]);
    $_SESSION["cartList"]["qtt"] = "".((float)$_SESSION["cartList"]["qtt"] + 1);

    if(isset($_SESSION["cartList"]["products"]))
        array_push($_SESSION["cartList"]["products"], array(
            "name"=>$_POST["Name"],
            "price"=>$_POST["Price"],
            "img"=>$_POST["Link"],
            "qtt"=>"1"
        ));
    else
        $_SESSION["cartList"]["products"] = array(
            array(
                "name"=>$_POST["Name"],
                "price"=>$_POST["Price"],
                "img"=>$_POST["Link"],
                "qtt"=>"1"
            )
        );
    header("Location: http://localhost/WP2/9%20template%20puro/index.php");
    }else{
        session_destroy();
        header("Location: http://localhost/WP2/9%20template%20puro/index.php");

    }

?>