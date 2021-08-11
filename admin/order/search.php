<?php
require_once '../../autoload/Autoload.php';
$id = Input::get('id');
$sql = 'SELECT * FROM sanpham WHERE id = ' . $id;
$result = $DB->query($sql);
print_r($result);
