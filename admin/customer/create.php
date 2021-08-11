<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$categories = $DB->query('SELECT * FROM danhmuc');

if (Input::hasPost('create')) {
    $hoten   = Input::post('hoten');
    $phone   = Input::post('phone');
    $diachi  = Input::post('diachi');
    $email   = Input::post('email');
    $hinhanh = Input::post('thumbnailUrl') == '' ? 'employee-avatar.png' : Input::post('thumbnailUrl');

    Validator::required($hoten, "Vui lòng nhập họ tên")
        ->min($hoten, 1, "Tên sản phẩm quá ngắn")
        ->required($phone, "Vui lòng nhập số điện thoại");

    if (!Validator::anyErrors()) {
        $success = $DB->create('khachhang', [
            'hoten'   => $hoten,
            'phone'   => $phone,
            'diachi'  => $diachi,
            'email'   => $email,
            'avatar' => $hinhanh,
        ]);

        if ($success === true) {
            $alertSuccess = "Thêm khách hàng thành công";
        } else {
            $alertErr = $success;
        }
    }
}

$title = "Thêm mới danh mục sản phẩm";
require_once '../../layouts/admin/header.php';
?>

<div class="d-flex justify-content-between mb-4">
    <h4>Thêm khách hàng</h4>
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

                        <?php if (isset($alertSuccess)) : ?>
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
                                <input type="text" class="form-control" id="inputType1" name="hoten">
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Điện thoại</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType2" name="phone">
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Email</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType3" name="email">
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Địa chỉ</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType4" name="diachi">
                            </div>
                        </div>

                        <!-- Thumbnail -->
                        <div class="form-group row showcase_row_area thumb mb-5">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType7">Thumbnail</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left upload-thumb">
                                <div class="upload-thumb-canvas">
                                    <img id="thumbnail" alt="" class="img-fluid h-100">
                                    <input type="file" class="form-control upload-thumb-input" id="inputType7" name="thumbnailUpload">
                                    <input type="hidden" class="form-control upload-thumb-input" id="inputType7" name="thumbnailUrl">
                                </div>
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

    <?php
    include('../../layouts/admin/footer.php');
    ?>

    <style>
        .upload-thumb {
            position: relative;
        }

        .upload-thumb-input {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            opacity: 0;
            cursor: pointer;
        }

        .upload-thumb-canvas {
            position: relative;
            border: 2px dotted #857bff;
            width: 80px;
            height: 80px;
            overflow: hidden;
            padding: 2px;
        }
    </style>

    <script src="addImage.js"></script>
