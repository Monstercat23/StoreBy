<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');

if (Input::hasPost('create')) {
    $hoten   = Input::post('hoten');
    $phone   = Input::post('phone');
    $diachi  = Input::post('diachi');
    $email   = Input::post('email');
    $hinhanh = Input::post('thumbnailUrl');

    Validator::required($hoten, "Vui lòng nhập họ tên")
        ->min($hoten, 1, "Tên sản phẩm quá ngắn")
        ->required($phone, "Vui lòng nhập số điện thoại");

    

    if (!Validator::anyErrors()) {
        $success = $DB->update('khachhang', [
            'hoten'   => $hoten,
            'phone'   => $phone,
            'diachi'  => $diachi,
            'email'   => $email,
            'avatar' => $hinhanh,
        ], $id);

        if ($success === true) {
            $alertSuccess = "Update Customer Sucessfully";
        } else {
            $alertErr = $success;
        }
    }
}

$data   = $DB->find('khachhang', $id);

if (!is_object($data)) {
    die('Không tồn tại khách hàng');
}

$title = "Thêm mới danh mục sản phẩm";
require_once '../../layouts/admin/header.php';
?>

<div class="d-flex justify-content-between mb-4">
    <h4>Cập nhật khách hàng</h4>
    <a href="<?= url('admin/customer') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-arrow-left-bold"></i></a>
</div>
<div class="container">
    <div class="grid-body">
        <div class="item-wrapper">
            <form method="post">
                <div class="row mb-3">
                    <div class="col-md-8 mx-auto">
                        <?php if (Validator::anyErrors()) : ?>
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
                                <label for="inputType1">Tên khách hàng</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType1" name="hoten" value="<?= $data->hoten ?>">
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Điện thoại</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType2" name="phone" value="<?= $data->phone ?>">
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Email</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType3" name="email" value="<?= $data->email ?>">
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Địa chỉ</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType4" name="diachi" value="<?= $data->diachi ?>">
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area thumb mb-5">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType7">Ảnh đại diện</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left upload-thumb">
                                <div class="upload-thumb-canvas">
                                    <img id="thumbnail" alt="" class="img-fluid h-100" src="<?= url($data->avatar) ?>">
                                    <input type="file" class="form-control upload-thumb-input" id="inputType7" name="thumbnailUpload">
                                    <input type="hidden" class="form-control upload-thumb-input" id="inputType7" name="thumbnailUrl" value="<?= $data->avatar ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <button type="submit" name="create" class="btn btn-sm btn-success">Cập Nhật</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once '../../layouts/admin/footer.php';
    require_once './addImage.php';
    ?>

