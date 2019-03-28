<?php
    session_start();

    if(isset($_GET["id"]) && isset($_GET["param"])) {
        $products = json_decode(file_get_contents("http://ramos.atwebpages.com/api/produtos.php?param=todos"), true);
        foreach ($products as $product) {
            if($product["id"] == $_GET["id"] && $product["tipo"] == $_GET["param"]) {
                if(!isset($_SESSION["cartList"]["products"]))
                    $_SESSION["cartList"]["products"] = [];
                $_SESSION["cartList"]["products"][] = $product;

                $_SESSION["cartList"]["sum"] = "".((float)$_SESSION["cartList"]["sum"] + (float) $product["preco"]);
                $_SESSION["cartList"]["qtt"] = "".((float)$_SESSION["cartList"]["qtt"] + 1);

                break;
            }
        }
    }

    header("Location: http://localhost/eshop/products.php?");
?>