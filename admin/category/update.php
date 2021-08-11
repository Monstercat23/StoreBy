<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');

if (Input::hasPost('update')) {
    $tendanhmuc = Input::post('tendanhmuc');
    $mota       = Input::post('mota');

    Validator::required($tendanhmuc, "Vui lòng nhập tên danh mục")
        ->min($tendanhmuc, 3, "Tên danh mục phải lớn hơn 3 kí ự")
        ->required($mota, "Vui lòng nhập mô tả ")
        ->min($mota, 3, "Mô tả quá ngắn ");


    if (!Validator::anyErrors()) {
        $success = $DB->update(
            'danhmuc',
            [
                'tendanhmuc' => $tendanhmuc,
                'mota'       => $mota,
            ],
            $id
        );

        if ($success === true) {
            $alertSuccess = "Cập nhật danh mục thành công";
        } else {
            $alertErr = $success;
        }
    }
}

$data = $DB->find('danhmuc', $id);

if (!is_object($data)) {
    die('Không tồn tại danh mục');
}



$title = "Cập nhật danh mục sản phẩm";
require_once '../../layouts/admin/header.php';

?>

<div class="d-flex justify-content-between mb-4">
    <h4>Cập nhật danh mục</h4>
    <a href="<?= url('admin/category/index.php') ?>" class="btn btn-primary btn-sm">
        <i class="mdi mdi-arrow-left-bold"></i>
    </a>
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

                        <?php if (isset($alertErr)) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <li><?= $alertErr ?></li>
                                </ul>
                            </div>
                        <?php endif ?>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Tên loại</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input name="tendanhmuc" type="text" class="form-control" id="inputType1" value="<?= $data->tendanhmuc ?>">
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType9">Mô tả</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                                <textarea name="mota" class="form-control" id="inputType9" cols="12" rows="5"><?= $data->mota ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area text-left">
                                <button name="update" class="btn btn-sm btn-success">Cập nhật</button>
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
