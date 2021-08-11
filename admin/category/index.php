<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$sql = "SELECT * FROM danhmuc";
$data = $DB->query($sql);


$title = "Danh mục sản phẩm";
require_once '../../layouts/admin/header.php';

?>

<div class="d-flex justify-content-between mb-4">
    <h4>Danh mục sản phẩm </h4>
    <a href="<?= url('admin/category/create.php') ?>" class="btn btn-primary btn-sm">Thêm mới</a>
</div>

<table id="categoriesDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm"># </th>
            <th class="th-sm">Tên loại</th>
            <th class="th-sm">Mô tả</th>
            <th class="th-sm text-center">Thời gian tạo</th>
            <th class="th-sm text-center" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php if (is_array($data)) : ?>
            <?php $i = 1 ?>
            <?php foreach ($data as $item) : ?>
                <tr>
                    <td style="width:50px"><?= $i ?></td>
                    <td><?= $item->tendanhmuc ?></td>
                    <td>
                        <?= strlen($item->mota) > 50 ?  substr($item->mota, 0, 50) . ' ...' : $item->mota ?>
                    </td>
                    <td style="width:120px">
                        <?= formatDate($item->created_at) ?>
                    </td>
                    <td class="text-center" style="width:50px">
                        <a href="<?= url("admin/category/update.php?id=$item->id") ?>"><b class='badge badge-warning status-Content'>Sửa</b></a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có muốn xóa danh mục không ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="<?= url("admin/category/delete.php?id=$item->id") ?>" class="btn btn-primary">Xóa</a>
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
        $('#categoriesDataTable').DataTable({
            "order": [
                [0, "desc"]
            ]
        }, );
        $('.dataTables_length').addClass('bs-select');
    });
</script>

<script>
    let showContents = document.querySelectorAll('.show-Content');
    let statusContent = document.querySelectorAll('.status-Content');

    showContents.forEach(function(item, index) {
        item.addEventListener('click', function() {
            let idContact = this.dataset.target.slice(19);

            let url = "/admin/contact/update-status/" + idContact;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    statusContent[index].className = 'badge badge-success status-Content';
                    statusContent[index].innerText = 'Đã xem';
                })
                .catch(err => {
                    console.log(err);
                })
        })
    })
</script>
