<?php

require_once './autoload/Autoload.php';

if (!Auth::customer()) {
    Redirect::url('login.php');
}


$cart = Session::get('cart');
$total = 0;
$countProduct = 0;

if (is_array($cart)) {
    foreach ($cart as $item) {
        $total += $item->so_luong_mua * $item->giaban;
        $countProduct++;
    }
}

if (Input::post('checkout')) {
    if (Input::hasPost('phone') && Input::post('address')) {
        $result = $DB->update(
            'khachhang',
            [
                'phone'  => Input::post('phone'),
                'diachi' => Input::post('address')
            ],
            Auth::customer()->id
        );

        $don_hang = [
            'tongtien'     => $total,
            'khachhang_id' => Auth::customer()->id,
            'trangthai'    => 0,
        ];

        $created = $DB->create('donhang', $don_hang);

        if ($created) {
            $idDonHang = $DB->getInsertID();
            foreach ($cart as $product) {
                $arrProductsDetail = [
                    'soluongmua' => $product->so_luong_mua,
                    'sale'       => $product->sale,
                    'sanpham_id' => $product->id,
                    'donhang_id' => $idDonHang,
                ];
                $resultCreatedProductDetail = $DB->create('chitietdonhang', $arrProductsDetail);
                if ($resultCreatedProductDetail) {
                    Session::forget('cart');
                    Redirect::url('checkout_success.php?info=1');
                } else {
                    Redirect::url('checkout_success.php?info=0');
                }
            }
        }
    }
}
$title = "Thanh toán";
require_once './layouts/page/header.php';
?>

<main id="checkout">
    <form name="checkout" method="post" class="" enctype="multipart/form-data">
        <?php if (is_array($cart)) : ?>
            <div class="container">
                <h2 class="text-primary text-center mb-4">Nhập Thông Tin</h2>
                <div class="input">
                    <div class="m-3">
                        <label for="address">Đia Chỉ *</label>
                        <input type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="m-3">
                        <label for="phone">Số Điện Thoại *</label>
                        <input type="text" name="phone" id="phone" placeholder="********">
                    </div>
                </div>
            </div>
            <div id="order_review" class="p-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $item) : ?>
                            <tr>
                                <td>
                                    <?= $item->tensanpham ?> &nbsp; <strong>&times;&nbsp;<?= $item->so_luong_mua ?></strong>
                                </td>
                                <td>
                                    <span><?= number_format($item->giaban * $item->so_luong_mua) . ' VND'  ?></span>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tổng tiền</th>
                            <td>
                                <strong><span><?= number_format($total) . ' vnđ'  ?></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div id="payment">
                    <button type="submit" class="btn btn-primary" name="checkout" id="place_order" value="Place order" data-value="Place order">Đặt hàng</button>
                </div>
                <div id="payment">
                <a href="<?= url('paymenton.php') ?>" class="btn btn-primary">Thanh toán trực tuyến</a>
                </div>
            </div>
        <?php else : ?>
            <h2 class="text-center text-danger">Đơn hàng của bạn chưa có sản phẩm nào !</h2>
        <?php endif ?>
    </form>
</main>

<?php require_once './layouts/page/footer.php' ?>
<? print_r($_SESSION) ?>
