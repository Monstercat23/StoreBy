<?php

require_once './autoload/Autoload.php';

if (isset($_POST['update-cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $_SESSION['cart'][$product->id]->so_luong_mua = $_POST[$product->id];
        $_SESSION['cart'][$product->id]->thanh_tien   =  $product->so_luong_mua * ($product->gia_ban * ((100 - $product->sale) / 100));
    }
    Redirect::back();
} else {
    Redirect::url("404.php");
}
