<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');
$data = $DB->find('baiviet', $id);

if (!is_object($data)) {
    die('Không tồn tại bài viết');
}

$deleted = $DB->delete('baiviet', $id);

if ($deleted === true) {
    Redirect::url('admin/blog');
}

die('Vui lòng thử lại');
