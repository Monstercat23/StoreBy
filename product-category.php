<?php
require_once './autoload/Autoload.php';

if (Input::hasGet("id")) {
    $danhmuc_id = Input::get("id");

    $baseUrl = "product-category.php?id=$danhmuc_id";

    $page = Input::get('page') ?? 1;
    $pageSize = 9;
    $offset = ($page - 1) * $pageSize;

    $sql = "SELECT * FROM danhmuc WHERE id=$danhmuc_id";
    $category = $DB->queryOne($sql);

    $sql = "SELECT * FROM sanpham WHERE danhmuc_id = '$danhmuc_id'";
    $products = $DB->query($sql);
    if (!is_array($products)) {
        Redirect::url("404.php");
    }
    $totalProduct = count($products);
    $paginateLink = pagination($totalProduct, $pageSize, $page, $baseUrl);

    $title = "Danh Mục Sản Phẩm";
} else {
    Redirect::url("404.php");
}

require_once './layouts/page/header.php';
?>

<div id="middle">
    <div class="headline cmsmasters_color_scheme_default">
    </div>
    <div class="middle_inner">
        <div class="content_wrap r_sidebar">
            <!-- Start Content -->
            <div class="content entry">
                <div class="cmsmasters_woo_wrap_result">
                    <div class="woocommerce-notices-wrapper"></div>
                    <p class="woocommerce-result-count">
                        Hiển thị 1 - 9 of <?= $totalProduct ?> kết quả</p>
                </div>
                <!-- Start List Products -->
                <ul class="products columns-3 cmsmasters_products">
                    <?php foreach ($products as $item) : ?>
                        <li class="product type-product post-1631 status-publish first instock product_cat-cell-phones product_cat-xiaomi has-post-thumbnail shipping-taxable purchasable product-type-simple">
                            <article class="cmsmasters_product">
                                <div class="cmsmasters_product_wrapper_border">
                                    <figure class="cmsmasters_product_img">
                                        <a href="product-detail.php?id=<?= $item->id ?>">
                                            <img width="540" height="540" src="<?= BASE_URL . '/' . $item->hinhanh ?> " class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2015/05/6-540x540.jpg 540w ' ?> " sizes="(max-width: 540px) 100vw, 540px" />
                                        </a>
                                    </figure>
                                    <div class="cmsmasters_product_inner">
                                        <header class="cmsmasters_product_header entry-header">
                                            <div class="cmsmasters_product_cat entry-meta">
                                                <a href="<?= url('product-category.php?id=' . $danhmuc_id) ?>" class="cmsmasters_cat_color cmsmasters_cat_27" rel="category tag">
                                                    <?= $category->tendanhmuc ?>
                                                </a>
                                            </div>
                                            <h3 class="cmsmasters_product_title entry-title">
                                                <a href="<?= url('product-detail.php?id=' . $item->id) ?>">
                                                    <?= $item->tensanpham ?>
                                                </a>
                                            </h3>
                                        </header>
                                        <div class="cmsmasters_product_info_wrap">
                                            <div class="cmsmasters_product_info">
                                                <span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">
                                                        </span><?= number_format($item->giaban) . ' vnđ' ?></span>
                                            </div>
                                            <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 5.00 out of 5">
                                                <div class="cmsmasters_star_trans_wrap">
                                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                    <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                </div>
                                                <div class="cmsmasters_star_color_wrap" data-width="width:100%">
                                                    <div class="cmsmasters_star_color_inner">
                                                        <?php for ($i = 1; $i <= $item->danhgia; $i++) : ?>
                                                            <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                        <?php endfor ?>
                                                    </div>
                                                </div>
                                                <span class="rating dn"><strong itemprop="ratingValue"><?= $item->danhgia ?></strong>
                                                    out of 5</span>
                                            </div>
                                            <div class="cmsmasters_product_add_wrap">
                                                <div class="cmsmasters_product_add_inner">
                                                    <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart">
                                                        <span>Thêm vào giỏ hàng</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    <?php endforeach ?>
                </ul>
                <!-- Finish List Products -->
                <div class="cmsmasters_wrap_pagination">
                    <?= $paginateLink ?>
                </div>
            </div>
            <!-- Finish Content -->
        </div>
    </div>
</div>
<!-- Finish Middle -->

<?php require_once './layouts/page/footer.php' ?>
