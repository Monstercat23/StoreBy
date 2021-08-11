<?php
/* Load Helper */

$loadHelper = [
    'Function',
    'Input',
    'Redirect',
    'Session',
    'Validator',
    'Auth',
    'Database',
    'Pagination'
    // 'Upload',
];

$posUrl =  strpos("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 'admin');

if ($posUrl != null) {
    // require_once __DIR__ . '/../config/Config.php';
    require_once '../../config/Config.php';

    foreach ($loadHelper as $item) {
        require_once "../../helper/$item.php";
        // require_once __DIR__ . "/../helper/$item.php";
    }
} else {
    require_once './config/Config.php';
    foreach ($loadHelper as $item) {
        require_once "./helper/$item.php";
    }
}

$DB = new Database();
