<?php
    require_once './autoload/Autoload.php';

    $title = "Giỏ hàng";
    require_once './layouts/page/header.php';
?>

<main id="cart">
    <?php if (is_array($cart)) : ?>
        <form action="<?= url('update-cart.php') ?>" method = "post">
            <table id="tb1">
                <thead >
                    <tr >
                        <th class="product-remove"></th>
                        <th class="product-thumbnail">Hình Ảnh</th>
                        <th class="product">Sản phẩm</th>
                        <th class="product">Giá bán</th>
                        <th class="product">Số lượng</th>
                        <th class="product">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item) : ?>
                        <tr>
                            <td class="">
                                <a href="<?= url('remove-product.php?id=') . $item->id ?>">&times;</a>
                            </td>
                            <td class="">
                                <a href="<?= url('product-detail.php?id=' . $item->id) ?>"><img width="50" height="50" src="<?= BASE_URL . '/' . $item->hinhanh ?>"   <?= BASE_URL . '/' . $item->hinhanh ?> sizes="(max-width: 540px) 100vw, 540px" /></a>
                            </td>
                            <td class="">
                                <a href="<?= url('product-detail.php?id=' . $item->id) ?>"><?= $item->tensanpham ?></a>
                            </td>
                            <td class="">
                                <span>
                                    <?= number_format($item->giaban) . ' VND'  ?>
                                </span>
                            </td>
                            <td class="">
                                <div class="number">
                                    <input type="number" id="quantity_5ef2ea9d0f8dd" class="count" step="1" min="0" max="" name="<?= $item->id ?>" value="<?= $item->so_luong_mua ?>" inputmode="numeric" />
                                </div>
                            </td>
                            <td class="">
                                <span>
                                    <?= number_format($item->giaban * $item->so_luong_mua) . ' VND'  ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot >
                    <tr>
                        <td colspan="6">
                            <button type="submit" class="button" name="update-cart" value="Update cart">Cập nhật giỏ hàng</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <div class="bill p-4">
            <h2>Hóa đơn</h2>
            <table class="table table-striped">
                <tr>
                    <th>Tổng tiền</th>
                    <td>
                        <span><?= number_format($total) . ' VND' ?></span>
                    </td>
                </tr>
                <tr class="order-total">
                    <th>Phí ship</th>
                    <td >
                        <span>Miễn phí</span>
                    </td>
                </tr>
                <tr class="order-total">
                    <th>Thành tiền</th>
                    <td >
                        <span><?= number_format($total) . ' vnđ'  ?></span>
                    </td>
                </tr>
            </table>
            <div class="btn-checkout">
                <a href="<?= url('checkout.php') ?>" class="btn btn-primary">Thanh toán</a>
            </div>
        </div>
    <?php else : ?>
        <h2 class="text-center">Giỏ hàng của bạn chưa có sản phẩm nào !</h2>
    <?php endif ?>
</main>

<a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>

<?php require_once './layouts/page/footer.php'; ?>
