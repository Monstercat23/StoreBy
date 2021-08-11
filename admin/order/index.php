<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$sql = "SELECT donhang.*, khachhang.hoten, khachhang.phone FROM donhang  join  khachhang on donhang.khachhang_id = khachhang.id";
$data = $DB->query($sql);

$title = "Quản lý khách hàng";
require_once '../../layouts/admin/header.php';

?>

<div class="d-flex justify-content-between mb-4">
    <h4>Quản lý đơn hàng </h4>
</div>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm text-center">
                #ID
            </th>
            <th class="th-sm text-center">
                Họ tên
            </th>
            <th class="th-sm text-center">
                Điện thoại
            </th>
            <th class="th-sm text-center">
                Tổng tiền (VND)
            </th>
            <th class="th-sm text-center">
                Thời gian
            </th>
            <th class="th-sm text-center">
                Trạng thái
            </th>
            <th class="th-sm text-center">
                Hành động
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if (is_array($data)) : ?>
            <?php $i = 1 ?>
            <?php foreach ($data as $item) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $item->hoten ?></td>
                    <td><?= $item->phone ?></td>
                    <td><?= number_format($item->tongtien) ?></td>
                    <td class="text-center"><?= formatDate($item->created_at) ?></td>
                    <td class="text-center" style="width:50px">
                        <?= $item->trangthai == 1  ? "<b class='badge badge-success status-Content'>Đã xử lý</b>" : "<b class='badge badge-warning status-Content'>Chưa xử lý</b>"  ?>
                    </td>
                    <td class="text-center" style="width:50px">
                        <a href="<?= url("admin/order/detail.php?id=$item->id") ?>"><b class='badge badge-primary status-Content'>Chi tiết</b></a>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>

<?php if (is_array($data)) : ?>
    <?php foreach ($data as $item) : ?>
        <div class="modal fade" id="exampleModal-<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa khách hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có muốn xóa khách hàng ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="<?= url("admin/customer/delete.php?id=$item->id") ?>" class="btn btn-primary">Xóa</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>

<?php if (is_array($data)) : ?>
    <?php foreach ($data as $item) : ?>
        <div class="modal fade" id="basicExampleModal-<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <p>Thông tin khách hàng</p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Họ tên: </span><?= $item->hoten ?></span>
                            </p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Email: </span><?= $item->email ?></span>
                            </p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Phone: </span><?= $item->phone ?></span>
                            </p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Địa chỉ: </span><?= $item->diachi ?></span>
                            </p>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>


<?php
require_once '../../layouts/admin/footer.php';
?>

<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable({
            "order": [
                [0, "asc"]
            ]
        }, );
        $('.dataTables_length').addClass('bs-select');
    });
</script>
