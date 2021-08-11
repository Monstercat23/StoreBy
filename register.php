<?php
    require_once './autoload/Autoload.php';

    if (Input::hasPost('register')) {
        //capcha
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
            //your site secret key
            $secret = '6Lf2AO0bAAAAABTjXd7b2X4AqZYCVUtLK-12PvTO';
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success):
        //codeold
        $sql = "SELECT * FROM khachhang WHERE email='" . Input::post('email') . "'";
        $isSetEmail = $DB->query($sql);

        if (!is_array($isSetEmail)) {
            $created = $DB->create(
                'khachhang',
                [
                    'email' => Input::post('email'),
                    'password' => md5(Input::post('password')),
                    'avatar' => 'public/uploads/customer/employee-avatar.png',
                    'hoten' => Input::post('hoten'),
                    'phone' => Input::post('phone'),
                    'diachi' => "",
                    'note' => ""
                ]
            );
            Redirect::url("login.php");
        } else {
            $errorRegister = "Email đã tồn tại";
        }
    else:
        $errMsg = 'Robot verification failed, please try again.';
    endif;
else:
    $errMsg = 'Please click on the reCAPTCHA box.';
endif;
    }

$title = "Đăng ký tài khoản thành viên";
require_once './layouts/page/header.php';
?>

<main id="register">
    <div class="container p-4">
        <form class="m-2 border p-4" method="POST">
            <h2 class="text-primary text-center mb-4">Đăng ký tài khoản thành viên</h2>
            <?php if (isset($errorRegister)) {?>
                <div class="bg-light p-2">
                    <h5 class="text-center text-danger"><?= $errorRegister ?></h5>
                </div>
            <?php } ?>
            <div class="input">
                <div class="m-3">
                    <label>Email *</label>
                    <input name="email" id="username" type="text" required>
                </div>
                <div class="m-3">
                    <label>Mật khẩu *</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="m-3">
                    <label>Họ tên *</label>
                    <input type="text" name="hoten" id="hoten" required>
                </div>
                <div class="m-3">
                    <label>Điện thoại *</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div class="g-recaptcha" data-sitekey="6Lf2AO0bAAAAALuCkaZaAMP7TVhjZYsqjiwGPBFn"></div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="register">Đăng Kí</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require_once './layouts/page/footer.php'; ?>
