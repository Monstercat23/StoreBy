<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$title = "Danh mục bài viết";
require_once '../../layouts/admin/header.php';

?>
<div class="d-flex justify-content-between mb-4">
  <h4>Danh mục bài viết </h4>
  <a href="<?= url('admin/blog-category/create.php') ?>" class="btn btn-primary btn-sm">Thêm mới</a>
</div>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">#ID
            </th>
            <th class="th-sm">Tên loại
            </th>
            <th class="th-sm">Mô tả
            </th>
            <th class="th-sm text-center">Thời gian tạo
            </th>
            <th class="th-sm text-center" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>@item.Id</td>
            <td>@item.Name</td>
            <td data-toggle="modal" data-target="#basicExampleModal-@item.Id" class="d-flex justify-content-between show-Content">
                Mô tả
                <i class="fa fa-eye" aria-hidden="true"></i>
            </td>
            <td style="width:120px">05/05/2020</td>
            <td class="text-center" style="width:50px">
            <a href="<?= url('admin/category/update.php') ?>"><b class='badge badge-warning status-Content'>Sửa</b></a>
            </td>
            <td class="text-center" style="width:50px">
            <a href="#"><b class='badge badge-danger status-Content' type="button" data-toggle="modal" data-target="#exampleModal">Xóa</b></a>
            </td>
        </tr>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="button" class="btn btn-primary">Xóa</button>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../layouts/admin/footer.php';
?>

<script>
  $(document).ready(function() {
    $('#dtBasicExample').DataTable({
      "order": [
        [0, "desc"]
      ]
    }, );
    $('.dataTables_length').addClass('bs-select');
  });
</script>

<script>
  // change status contact while click show content
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
