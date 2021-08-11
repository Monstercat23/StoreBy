<?php
require_once '../../autoload/Autoload.php';

Auth::mustBeAdmin();

$id   = Input::get('id');

$data   = $DB->find('sanpham', $id);
if (!is_object($data)) {
    die('Không tồn tại sản phẩm');
}
$categories = $DB->query('SELECT * FROM danhmuc');

if (Input::hasPost('update')) {
    $tensanpham = Input::post('tensanpham');
    $mota       = Input::post('mota');
    $giaban     = Input::post('giaban');
    $soluong    = Input::post('soluong');
    $sale       = Input::post('sale');
    $danhmuc_id = Input::post('danhmuc_id');
    $hinhanh    = Input::post('thumbnailUrl');
    $images     = Input::post('images');

    Validator::required($tensanpham, "Vui lòng nhập tên sản phẩm")
        ->min($tensanpham, 1, "Tên sản phẩm quá ngắn")
        ->required($mota, "Vui lòng nhập mô tả ")
        ->min($mota, 3, "Mô tả quá ngắn ")
        ->required($giaban, "Vui lòng nhập giá bán ")
        ->numeric($giaban, "Giá bán không hợp lệ ")
        ->required($soluong, "Vui lòng nhập số lượng ")
        ->numeric($giaban, "Số lượng không hợp lệ ")
        ->categoryRequired($danhmuc_id, "Vui lòng chọn loại sản phẩm")
        ->required($hinhanh, "Vui lòng chọn thumbnail");

    foreach ($images as $key => $value) {
        $valueAfter = str_replace(BASE_URL . "/", "", $value);
        $images[$key] = $valueAfter;
    }

    if (!Validator::anyErrors()) {
        $success = $DB->update(
            'sanpham',
            [
                'tensanpham' => $tensanpham,
                'mota'       => $mota,
                'giaban'     => $giaban,
                'soluong'    => $soluong,
                'danhmuc_id' => $danhmuc_id,
                'sale'       => $sale,
                'hinhanh'    => $hinhanh,
                'user_id'    => Auth::user()->id,
            ],
            $id
        );

        if ($success === true) {
            $alertSuccess = "Cập nhật sản phẩm thành công";
        } else {
            $alertErr     = $success;
        }

        /* Add Image to DB */
        $DB->delete('anhsanpham', $id, ['sanpham_id']);
        foreach ($images as $value) {
            if ($value != '') {
                $DB->create('anhsanpham', [
                    'url'        => $value,
                    'sanpham_id' => $id
                    ]);
            }
        }
    }
}

$images = $DB->query("select * from anhsanpham where sanpham_id = $id ");

$title = "Thêm mới danh mục sản phẩm";
require_once '../../layouts/admin/header.php';
?>


<div class="d-flex justify-content-between mb-4">
    <h4>Cập nhật sản phẩm</h4>
    <a href="<?= url('admin/product') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-arrow-left-bold"></i></a>
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
                                        <li>
                                            <?= $err ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>

                        <?php if (isset($alertSuccess)) : ?>
                            <div class="alert alert-success">
                                <ul>
                                    <li>
                                        <?= $alertSuccess ?>
                                    </li>
                                </ul>
                            </div>
                        <?php endif ?>

                        <?php if (isset($alertErr)) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <li>
                                        <?= $alertErr ?>
                                    </li>
                                </ul>
                            </div>
                        <?php endif ?>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType1">Tên sản phẩm</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType1" name="tensanpham" value="<?= $data->tensanpham ?>">
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label>Loại sản phẩm</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                                <select class="custom-select" name="danhmuc_id">
                                    <option value="0">Chọn danh mục</option>
                                    <?php foreach ($categories as $item) : ?>
                                        <?php if ($item->id == $data->danhmuc_id) : ?>
                                            <option value="<?= $item->id ?>" selected><?= $item->tendanhmuc ?></option>
                                        <?php else : ?>
                                            <option value="<?= $item->id ?>"><?= $item->tendanhmuc ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType9">Mô tả</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                                <textarea class="form-control" id="inputType9" cols="12" rows="5" name="mota"><?= $data->mota ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType5">Số lượng</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType5" name="soluong" value=<?= $data->soluong ?>>
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType6">Gía bán (vnđ)</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType6" name="giaban" value=<?= $data->giaban ?>>
                            </div>
                        </div>

                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType5">Sale (%)</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left">
                                <input type="text" class="form-control" id="inputType5" name="sale" value=<?= $data->sale ?>>
                            </div>
                        </div>

                        <!-- Thumb -->
                        <div class="form-group row showcase_row_area thumb mb-5">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType7">Thumbnail</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left upload-thumb">
                                <div class="upload-thumb-canvas">
                                    <img id="thumbnail" alt="" class="img-fluid h-100" src="<?= url($data->hinhanh) ?>">
                                    <input type="file" class="form-control upload-thumb-input" id="inputType7" name="thumbnailUpload">
                                    <input type="hidden" class="form-control upload-thumb-input" id="inputType7" value="<?= $data->hinhanh ?>" name="thumbnailUrl">
                                </div>
                            </div>
                        </div>

                        <!-- List Image -->
                        <div class="form-group row showcase_row_area thumb">
                            <div class="col-md-2 showcase_text_area text-left">
                                <label for="inputType7">Images</label>
                            </div>
                            <div class="col-md-9 showcase_content_area text-left upload-thumb d-flex">
                                <?php $i = 0 ?>
                                <?php while ($i < 5) : ?>
                                    <?php if (isset($images[$i]->url)) :?>
                                        <div class="upload-thumb-canvas mr-3">
                                            <img id="images-<?= $i ?>" class="img-fluid h-100" src="<?= url($images[$i]->url) ?>">
                                            <input type="file" class="form-control upload-thumb-input images">
                                            <input type="hidden" name="images[<?= $i ?>]" value="<?= $images[$i]->url ?>">
                                        </div>
                                        <?php $i++ ?>
                                        <?php continue ?>
                                    <?php endif ?>
                                    <div class="upload-thumb-canvas mr-3">
                                        <img id="images-<?= $i ?>" class="img-fluid h-100">
                                        <input type="file" class="form-control upload-thumb-input images">
                                        <input type="hidden" name="images[<?= $i ?>]">
                                    </div>
                                    <?php $i++ ?>
                                <?php endwhile ?>
                            </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                            <div class="col-md-2 showcase_text_area text-left">
                                <button type="submit" name="update" class="btn btn-sm btn-success">Cập nhật</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <?php
        require_once '../../layouts/admin/footer.php';
        require_once './addImage.php'
    ?>
