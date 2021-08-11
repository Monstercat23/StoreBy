<?php
require_once './autoload/Autoload.php';

$id_sanpham = Input::get('id');
$sanpham    = $DB->find('sanpham', $id_sanpham);
if (is_object($sanpham)) {
    $so_luong_mua  = Input::get('so_luong') ?? 1;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            if ($product->id == $id_sanpham) {
                $_SESSION['cart'][$id_sanpham]->so_luong_mua = $product->so_luong_mua + $so_luong_mua;
                $_SESSION['cart'][$product->id]->thanh_tien  =  $_SESSION['cart'][$id_sanpham]->so_luong_mua * ($product->gia_ban * ((100 - $product->sale) / 100));
                Redirect::url('cart.php');
            } else {
                $thanh_tien = $so_luong_mua * ($sanpham->gia_ban * ((100 - $sanpham->sale) / 100));
                $sanpham->thanh_tien   = $thanh_tien;
                $sanpham->so_luong_mua = $so_luong_mua;

                $_SESSION['cart'][$id_sanpham] = $sanpham;
                Redirect::url('cart.php');
            }
        }
    }

    $thanh_tien  = $so_luong_mua * ($sanpham->gia_ban * ((100 - $sanpham->sale) / 100));
    $sanpham->thanh_tien   = $thanh_tien;
    $sanpham->so_luong_mua = $so_luong_mua;

    $_SESSION['cart'][$id_sanpham] = $sanpham;
    Redirect::url('cart.php');
} else {
    Redirect::url('404.php');
}
