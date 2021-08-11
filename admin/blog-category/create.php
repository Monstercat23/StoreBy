<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

if (Input::hasPost('create')) {
    $tendanhmuc = Input::post('tendanhmuc');
    $mota       = Input::post('mota');

    Validator::required($tendanhmuc, "Vui lòng nhập tên danh mục")
        ->min($tendanhmuc, 3, "Tên danh mục phải lớn hơn 3 kí tự")
        ->required($mota, "Vui lòng nhập mô tả ")
        ->min($mota, 3, "Mô tả quá ngắn ");


    if (!Validator::anyErrors()) {
        $success = $DB->create('danhmuc_blog', [
            'tendanhmuc' => $tendanhmuc,
            'mota'       => $mota,
        ]);

        if ($success) {
            $alertSuccess = 'Thêm danh mục thành công';
        }
    }
}

$title = "Thêm mới danh mục bài viết";
require_once '../../layouts/admin/header.php';

?>
<div class="d-flex justify-content-between mb-4">
    <h4>Thêm mới danh mục</h4>
    <a href="<?= url('admin/blog-category') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-arrow-left-bold"></i></a>
</div>
<div class="container">
    <div class="grid-body">
        <div class="item-wrapper">
            <form method="post">
                <div class="row mb-3">
                    <div class="col-md-8 mx-auto">
                        <?php
                        if (Validator::anyErrors()) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach (Validator::$errors as $err) : ?>
                                        <li><?= $err ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                        <?php

                        if (isset($alertSuccess)) : ?>
                            <div class="alert alert-success">
                                <ul>
                                    <li><?= $alertSuccess ?></li>
                                </ul>
                            </div>
                        <?php endif ?>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Tên loại</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType1" name="tendanhmuc">
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType9">Mô tả</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                                <textarea class="form-control" id="inputType9" cols="12" rows="5" name="mota"></textarea>
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label>Danh mục</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                                <select class="custom-select" name="danhmuc_id">
                                    <option selected="">Chọn danh mục</option>
                                    <option value="1">Ngon</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <button type="submit" name="create" class="btn btn-sm btn-success">Thêm mới</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once '../../layouts/admin/footer.php';
?>
