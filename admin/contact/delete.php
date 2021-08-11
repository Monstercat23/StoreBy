<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');

$data = $DB->find('lienhe', $id);

if (!is_object($data)) {
    die('Không tồn tại liên hệ');
}

$deleted = $DB->delete('lienhe', $id);

if ($deleted === true) {
    Redirect::url('admin/contact');
}

die('Vui lòng thử lại');
