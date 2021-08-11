<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$sql = "SELECT * FROM sanpham";
$data = $DB->query($sql);

$title = "Quản lý sản phẩm";
require_once '../../layouts/admin/header.php';

?>

<div class="d-flex justify-content-between mb-4">
    <h4>Quản lý sản phẩm</h4>
    <a href="<?= url('admin/product/create.php') ?> " class="btn btn-primary btn-sm">Thêm mới</a>
</div>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">#ID</th>
            <th class="th-sm">ID Sản Phẩm</th>
            <th class="th-sm">Tên sản phẩm</th>
            <th class="th-sm text-center">Ảnh</th>
            <th class="th-sm text-center">Lượt mua</th>
            <th class="th-sm text-center">Số lượng</th>
            <th class="th-sm text-center ">Giá bán (vnđ)</th>
            <th class="th-sm text-center">Thời gian</th>
            <th class="th-sm text-center">Hành động</th>
            <th class="th-sm text-center">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php if (is_array($data)) : ?>
            <?php $i = 1 ?>
            <?php foreach ($data as $item) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $item->id ?></td>
                    <td><?= $item->tensanpham ?></td>
                    <td class="text-center"><img style="width:50px" src="<?= url($item->hinhanh) ?>"></td>
                    <td class="text-center"><?= $item->luotmua ?></td>
                    <td class="text-center"><?= $item->soluong ?></td>
                    <td class="text-center"><?= $item->giaban ?></td>
                    <td class="text-center"><?= formatDate($item->created_at) ?></td>
                    <td class="text-center" style="width:50px">
                        <a href="<?= url("admin/product/update.php?id=$item->id") ?>">
                            <b class='badge badge-warning status-Content'>Sửa</b>
                        </a>
                    </td>
                    <td class="text-center" style="width:50px">
                        <a href="#">
                            <b class='badge badge-danger status-Content' type="button" data-toggle="modal" data-target="#exampleModal-<?= $item->id ?>">Xóa</b>
                        </a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có muốn xóa sản phẩm ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="<?= url("admin/product/delete.php?id=$item->id") ?>" class="btn btn-primary">Xóa</a>
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
                [
                    0,
                    "asc"
                ]
            ]
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
