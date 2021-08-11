<?php
require_once './autoload/Autoload.php';
$title = "Thanh toán ";
require_once './layouts/page/header.php';

$message = "";
if (Input::hasGet('info')) {
    if (Input::get('info') == 1) {
        $message = "Đặt hàng thành công chúng tôi sẽ liên hệ lại để xác thực thông tin của bạn !";
    } else {
        $message = "Đặt hàng thất bại. Vui lòng kiểm tra lại";
    }
}
?>

<main id="checkoutSuccess">
    <div class="container">
        <h2 class="text-center">
            <?= $message ?>
        </h2>
    </div>
</main>

<?php require_once './layouts/page/footer.php' ?>
