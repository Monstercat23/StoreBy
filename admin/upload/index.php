<?php
require_once '../../config/Config.php';

if (isset($_GET['position'])) {
    header('Content-Type: application/json; charset=utf-8');
    $path = "";
    switch ($_GET['position']) {
        case 'product': {
                $path = 'public/uploads/products/' . date("Y") . '/' . date("m") . '/';
                break;
            }
        case 'customer': {
                $path = 'public/uploads/customer/';
                break;
            }
        case 'blog': {
                $path = 'public/uploads/blog/';
                break;
            }
        default:
            $path = 'public/uploads/other/';
            break;
    }

    if (isset($_FILES['thumbnailUpload'])) {
        $file_name = rand(1, 100000) . "_" . str_replace(" ", "", $_FILES['thumbnailUpload']['name']);
        $file_tmp = $_FILES['thumbnailUpload']['tmp_name'];
        $file_type = $_FILES['thumbnailUpload']['type'];
        $file_error = $_FILES['thumbnailUpload']['error'];

        if ($file_error == 0) {
            $part = $_SERVER['DOCUMENT_ROOT'] . PATH . '/' . $path;
            /* WARNING: mkdir folder path in upload */
            move_uploaded_file($file_tmp, $part . $file_name);
            echo json_encode($path . $file_name);
            return;
        } else {
            echo json_encode("Can't Upload This File");
        }
    } else {
        echo json_encode("Don't Request File");
    }
} else {
    echo json_encode("Error");
}
return;
