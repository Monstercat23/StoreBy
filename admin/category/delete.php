<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');
$data = $DB->find('danhmuc', $id);

if (!is_object($data)) {
    die('Không tồn tại danh mục');
}

$deleted = $DB->delete('danhmuc', $id);

if ($deleted === true) {
    Redirect::url('admin/category');
}

die('Vui lòng thử lại');
