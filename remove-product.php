<?php

require_once './autoload/Autoload.php';

if (isset($_GET['id']) && isset($_SESSION['cart'])) {
    unset($_SESSION['cart'][$_GET['id']]);
    Redirect::url("cart.php");
} else {
    Redirect::url("404.php");
}
