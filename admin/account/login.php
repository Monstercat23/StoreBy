<?php
require_once '../../autoload/Autoload.php';

if (Auth::user()) {
    Redirect::url('admin/dashboard/index.php');
}

if (Input::hasPost('login')) {
    $username = Input::post('username');
    $password = md5(Input::post('password'));

    Validator::required($username, "Vui long nhap ten dang nhap")
        ->min($username, 3, "Tai khoan phai lon hon 3 ki tu")
        ->required($password, "Vui long nhap mat khau ");


    if (!Validator::anyErrors()) {
        $sql = "SELECT * FROM users WHERE name = '$username' && password = '$password'";
        $data = $DB->query($sql);

        if (is_array($data)) {
            Session::put('user', $data);
            Redirect::url('admin/dashboard/index.php');
        }

        $loginErr = "Sai tên đăng nhập hoặc mật khẩu";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SHOP - Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.css' ?>" />
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/vendors/css/vendor.addons.css' ?>" />
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/shared/style.css' ?>" />
    <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/demo_1/style.css' ?>">
    <link rel="shortcut icon" href="<?= BASE_URL . '/layouts/admin/assets/images/favicon.ico' ?>" />

</head>

<body>
    <header></header>
    <main class="authentication-theme auth-style_1">
        <div class="row">
            <div class="col-12 logo-section">
                <a href="../../index.html" class="logo">
                    <h2>Admin</h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
                <div class="grid">
                    <div class="grid-body">
                        <div class="row">
                            <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                                <form method="post">
                                    <?php if (Validator::anyErrors()) : ?>
                                        <div class="alert alert-danger">
                                            <ul>
                                                <?php foreach (Validator::$errors as $err) : ?>
                                                    <li><?= $err ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php endif ?>

                                    <?php if (isset($loginErr)) : ?>
                                        <div class="alert alert-danger">
                                            <?= $loginErr ?>
                                        </div>
                                    <?php endif ?>

                                    <div class="form-group input-rounded">
                                        <input type="text" class="form-control" placeholder="Username" name="username" />
                                    </div>
                                    <div class="form-group input-rounded">
                                        <input type="password" class="form-control" placeholder="Password" name="password" />
                                    </div>
                                    <div class="form-inline">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="form-check-input" />Remember me <i class="input-frame"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" name="login"> Login </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="auth_footer">
            <p class="text-muted text-center">© Copyright 2020</p>
        </footer>
    </main>
</body>

</html>

<?php
require_once '../../layouts/admin/footer.php';
?>
