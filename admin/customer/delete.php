<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');
$data = $DB->find('khachhang', $id);

if (!is_object($data)) {
    die('Không tồn tại khách hàng');
}

$deleted = $DB->delete('khachhang', $id);

if ($deleted === true) {
    Redirect::url('admin/customer');
}
die('Vui lòng thử lại');
