<?php
require_once './autoload/Autoload.php';
Session::forget("customer");
Redirect::url('index.php');
