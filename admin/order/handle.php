<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');

$data = $DB->find('donhang', $id);
if (!is_object($data)) {
    die('Không tồn tại đơn hàng');
}

$updated = $DB->update('donhang', ['trangthai' => true], $id);

if ($updated === true) {
    Redirect::url('admin/order');
}

die('Vui lòng thử lại');
