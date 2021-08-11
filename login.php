<?php
require_once './autoload/Autoload.php';

if (Input::hasPost('login')) {
    $email = Input::post('email');
    $password = md5(Input::post('password'));

    Validator::required($email, "Vui lòng nhập email")
            ->required($password, "Vui lòng nhập password");

    if (!Validator::anyErrors()) {
        $sql = "SELECT * FROM khachhang WHERE email = '$email' && password = '$password'";
        $data = $DB->query($sql);

        if (is_array($data)) {
            Session::put('customer', $data);
            Redirect::url('index.php');
        } else {
            $errorLogin = "Sai tên đăng nhập hoặc mật khẩu";
        }
    }
}

$title = "Đăng nhập";
require_once './layouts/page/header.php';
?>

<main id="login">
    <div class="container p-4">
        <form class="m-2 border p-4" method="POST">
            <h2 class="text-primary text-center mb-4">Đăng nhập tài khoản thành viên</h2>
            <?php if (Validator::anyErrors()) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (Validator::$errors as $err) : ?>
                            <li><?= $err ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php elseif (isset($errorLogin)) :?>
                <div class="alert alert-danger"><?= $errorLogin ?></div>
            <?php endif ?>

            <div class="input">
                <div class="m-3">
                    <label>Email *</label>
                    <input name="email" id="email" type="text" placeholder="example@example.com">
                </div>
                <div class="m-3">
                    <label>Mật khẩu *</label>
                    <input type="password" name="password" id="password" placeholder="********">
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button class="btn btn-primary" type="submit" name="login">Đăng Nhập</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require_once './layouts/page/footer.php'; ?>
