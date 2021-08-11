<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');
$order   = $DB->find('donhang', $id);
if (!is_object($order)) {
    die('Không tồn tại đơn hàng');
}

$sql = "SELECT chitietdonhang.*, sanpham.* FROM  donhang
        join chitietdonhang on chitietdonhang.donhang_id = donhang.id
        join sanpham on chitietdonhang.sanpham_id = sanpham.id
        WHERE donhang.id = $id";
$data = $DB->query($sql);

$customer = $DB->find('khachhang', $order->khachhang_id);

$title = "Quản lý khách hàng";
require_once '../../layouts/admin/header.php';

?>

<div class="d-flex justify-content-between mb-4">
    <h4>Chi tiết đơn hàng dh-#<?= $id ?> </h4>
    <a href="<?= url('admin/order/handle.php?id=' . $id) ?> " class="btn btn-primary btn-sm">Xử lý</a>
</div>

<div class="item-wrapper">
    <div class="table-responsive">
        <table class="table info-table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th class="text-center">Số lượng</th>
                    <th>Đơn giá (vnđ)</th>
                    <th>Thành tiền (vnđ)</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr>
                        <td><?= $item->tensanpham ?></td>
                        <td class="text-center"><?= $item->soluongmua ?></td>
                        <td style="width:100px"><?= number_format($item->giaban) ?></td>
                        <td style="width:100px"><?= number_format($item->giaban * $item->soluongmua) ?></td>
                        <td class="actions">
                            <i class="mdi mdi-dots-vertical"></i>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="card mt-5" style="width: 18rem">
    <div class="card-header">
        Hóa đơn #dh-<?= $id ?>
    </div>
    <ul class="list-group list-group-flush">
        <li class="py-2 px-3"><span class="d-inline-block" style="width: 120px">Khách hàng</span><span><?= $customer->hoten ?></span></li>
        <li class="py-2 px-3"><span class="d-inline-block" style="width: 120px">Điện thoại</span><?= $customer->phone ?></li>
        <li class="py-2 px-3"><span class="d-inline-block" style="width: 120px">Thời gian</span><?= formatDate($order->created_at) ?></li>
        <li class="py-2 px-3"><span class="d-inline-block" style="width: 120px">Tổng tiền</span><span><?= number_format($order->tongtien) . ' vnđ' ?></span></li>
    </ul>
    <!-- <a href="<?php url("/admin/order/exportexcel.php?id=" . $id)?>" class="btn btn-sm btn-success">Xuất hóa đơn</a> -->
</div>

<?php
    require_once '../../layouts/admin/footer.php';
?>
