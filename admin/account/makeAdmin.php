<?php
require_once('../../autoload/Autoload.php');

    $username = "admin";
    $password = md5("123456");
    $email    = "admin@gmail.com";
    $avatar   = "/public/uploads/profile/avatar-default.jpg";
    $success  = $DB->create(
        'users',
        [
            'name'     => $username,
            'email'    => $email,
            'password' => $password,
            'avatar'   => $avatar,
        ]
    );
    if ($success) {
        echo 'Create Admin Account Successfully';
    } else {
        echo 'Create Admin Account Failed';
    }
