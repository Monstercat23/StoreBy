<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$sql = "SELECT * FROM lienhe ORDER BY id DESC";
$data = $DB->query($sql);

$title = "Quản lý liên hệ";
require_once '../../layouts/admin/header.php';
?>

<div class="d-flex justify-content-between mb-4">
  <h4>Quản lý liên hệ </h4>
</div>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">#ID</th>
            <th class="th-sm">Họ tên</th>
            <th class="th-sm">Điện thoại</th>
            <th class="th-sm">Email</th>
            <th class="th-sm ">Nội dung</th>
            <th class="th-sm text-center">Thời gian</th>
            <th class="th-sm text-center">Trạng thái</th>
            <th class="th-sm text-center">Hành động</th>
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
                <td><?= $item->email ?></td>
                <td data-toggle="modal" style="cursor:pointer" data-target="#basicExampleModal-<?= $item->id ?>" class="d-flex justify-content-between show-Content"><?= strlen($item->noidung) > 5 ?  substr($item->noidung, 0, 5) . '...'  : $item->noidung ?><i style="cursor:pointer" class="mdi mdi-eye "></i></td>
                <td class="text-center"><?= formatDate($item->created_at) ?></td>
                <td class="text-center" style="width:50px">
                    <?= !$item->trangthai === true ? " <span style='width:80px' class='badge badge-warning text-center mx-auto status-Content'>Chưa xem</span> " : " <span style='width:80px' class='badge badge-success text-center mx-auto status-Content'>Đã xem</span> " ?>
                </td>
                <td class="text-center" style="width:50px">
                    <a href="#"><b class='badge badge-danger status-Content' type="button" data-toggle="modal" data-target="#exampleModal-<?= $item->id ?>">Xóa</b></a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Xóa liên hệ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có muốn xóa liên hệ ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a href="<?= url("admin/contact/delete.php?id=$item->id") ?>" class="btn btn-primary">Xóa</a>
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
                            <p><?= $item->chude ?></p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Họ tên: </span><?= $item->hoten ?></span>
                            </p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Email: </span><?= $item->email ?></span>
                            </p>
                            <p>
                                <span style="font-size: 14px"><span style="width:80px; display:inline-block">Phone: </span><?= $item->phone ?></span>
                            </p>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <?= $item->noidung ?>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-footer"></div>
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

<script>
    let showContents = document.querySelectorAll('.show-Content');
    let statusContent = document.querySelectorAll('.status-Content');

    showContents.forEach(function(item, index) {
        item.addEventListener('click', function() {

        let idContact = this.dataset.target.slice(19);

        let url = "update.php?id= " + idContact;

        fetch(url)
            .then(response => response.json())
            .then(data => {
            console.log(data);

            statusContent[index].className = 'badge badge-success status-Content mx-auto';
            statusContent[index].innerText = 'Đã xem';
            })
            .catch(err => {
            console.log(err);
            })
        })
    })
</script>
