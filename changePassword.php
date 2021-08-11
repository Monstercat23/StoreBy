<?php
require_once './autoload/Autoload.php';

if (Input::hasPost('changePassword')) {
    $email = Input::post('email');
    $oldPassword = md5(Input::post('oldPassword'));
    $newPassword = md5(Input::post('newPassword'));


    Validator::required($email, "Vui lòng nhập email")
            ->required($oldPassword, "Vui lòng nhập password cũ")
            ->required($newPassword, "Vui lòng nhập password mới");

    if (!Validator::anyErrors()) {
        $sql = "SELECT * FROM khachhang WHERE email = '$email' && password = '$oldPassword'";
        $data = $DB->queryOne($sql);

        if (is_object($data)) {
            $result = $DB->update('khachhang',
                [
                    'password' => $newPassword
                ]
                , $data->id);
            if ($result) {
                $errorLogin = "Update Successfully";
                Session::destroy();
                // Redirect::url('changePassword.php');
            }
            else {
                $errorLogin = "Have an error. Please try again !";
            }
        } else {
            $errorLogin = "Have an error. Please try again !";
        }
    }
}


$title = "Forgot Password";
require_once './layouts/page/header.php';
?>

<main id="login">
    <div class="container p-4">
        <form class="m-2 border p-4" method="POST">
            <h2 class="text-primary text-center mb-4">Đổi Mật Khẩu</h2>
            <?php if (isset($errorLogin)) :?>
                <div class="bg-light p-2">
                    <h5 class="text-center text-danger"><?= $errorLogin ?></h5>
                </div>
            <? endif ?>
            <div class="input">
                <div class="m-3">
                    <label for="email">Email *</label>
                    <input name="email" id="email" type="text" placeholder="Your Email...">
                </div>
                <div class="m-3">
                    <label for="oldPassword">Mật khẩu Cũ *</label>
                    <input type="password" name="oldPassword" id="oldPassword" placeholder="Old Your Password ...">
                </div>
                <div class="m-3">
                    <label for="newPassword">Mật khẩu Mới*</label>
                    <input type="password" name="newPassword" id="newPassword" placeholder="New Your Password ...">
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button class="btn btn-primary" type="submit" name="changePassword">Đổi Mật Khẩu</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require_once './layouts/page/footer.php';
