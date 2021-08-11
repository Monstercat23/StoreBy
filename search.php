<?php
require_once './autoload/Autoload.php';

$search = Input::get('search') ?? '';
$category = Input::get('category') ?? '';
$page = Input::get('page') ?? 1;

$pageSize = 9;
$offset = ($page - 1) * $pageSize;
$filter = Input::get('orderby') ?? null;
$baseUrl = '';

if ($filter != null) {
    switch ($filter) {
        case 'rating':
            $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.danhgia DESC LIMIT $pageSize OFFSET $offset";
            break;
        case 'price':
            $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.giaban ASC LIMIT $pageSize OFFSET $offset";
            break;
        case 'price-desc':
            $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.giaban DESC LIMIT $pageSize OFFSET $offset";
            break;
        case 'popularity':
            $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.luotmua DESC LIMIT $pageSize OFFSET $offset";
            break;
        case 'news':
            $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
            break;
        default:
            $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
    }

    $products = $DB->query($sql);
    $baseUrl =  "shop.php?orderby=$filter";
} else {
    $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
    $products = $DB->query($sql);
}

if ($search != null) {
    $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE sanpham.tensanpham LIKE '%$search%' ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
}
if ($category != null) {
    $sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE sanpham.tensanpham LIKE '%$search%' AND danhmuc.id = '$category' ORDER BY sanpham.id DESC LIMIT $pageSize OFFSET $offset";
}

$baseUrl = "search.php?category=$category&search=$search";
$products = $DB->query($sql);
$productHot = $DB->query($sql);

$sql = "SELECT * FROM danhmuc";
$categories = $DB->query($sql);

$totalProduct = 0;
if (is_array($products)) {
    $totalProduct = count($products);
}
$paginateLink = pagination($totalProduct, $pageSize, $page, $baseUrl);

$title = "Kết quả ";
require_once './layouts/page/header.php';
?>

<!-- Start Middle -->
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
                        Hiển thị 1 &ndash; 9 of <?= $totalProduct ?> kết quả</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected='selected'>Lọc kết quả</option>
                            <option value="popularity">Bán chạy</option>
                            <option value="rating">Đánh giá cao</option>
                            <option value="news">Mới</option>
                            <option value="price">Giá thấp</option>
                            <option value="price-desc">Giá cao</option>
                        </select>
                        <input type="hidden" name="page" value="1" />
                    </form>
                </div>
                <ul class="products columns-3 cmsmasters_products">
                    <?php if (is_array($products)) : ?>
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
                                                    <a href="<?= url('product-category.php?id=' . $item->danhmuc_id) ?>" class="cmsmasters_cat_color cmsmasters_cat_27" rel="category tag">
                                                        <?= $item->tendanhmuc ?>
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
                                                    <span class="woocommerce-Price-amount amount"></span>
                                                    <span>
                                                        <span class="woocommerce-Price-currencySymbol"></span>
                                                        <?= number_format($item->giaban) . ' vnđ' ?>
                                                    </span>
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
                                                    <span class="rating dn">
                                                        <strong itemprop="ratingValue"><?= $item->danhgia ?></strong> out of 5
                                                    </span>
                                                </div>
                                                <div class="cmsmasters_product_add_wrap">
                                                    <div class="cmsmasters_product_add_inner">
                                                        <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart">
                                                            <span>Thêm vào giỏ hàng</span>
                                                        </a>
                                                        <a href="<?= url('add-cart.php?id=' . $item->id) ?>"" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart">
                                                            <span>Xem giỏ hàng</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        <?php endforeach ?>
                    <?php else : ?>
                        <h2>Không tìm thấy kết quả nào</h2>
                    <?php endif ?>
                </ul>
                <div class="cmsmasters_wrap_pagination">
                    <?= $paginateLink ?>
                </div>
            </div>
            <!-- Finish Content -->

            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h3 class="widgettitle">Danh mục sản phẩm</h3><select name='product_cat' id='product_cat' class='dropdown_product_cat'>
                        <option value='' selected='selected'>Select a category</option>
                        <?php foreach ($categories as $item) :?>
                            <option class="level-0" value="<?= $item->tendanhmuc?>"><?= $item->tendanhmuc ?></option>
                        <?php endforeach ?>
                    </select>
                </aside> -->
                <aside id="woocommerce_products-4" class="widget woocommerce widget_products">
                    <h3 class="widgettitle">Sản phẩm bán chạy</h3>
                    <ul class="product_list_widget">
                        <?php if ($productHot) :?>
                                <?php foreach ($productHot as $item) : ?>
                                    <li>
                                        <a href="<?= url('product-detail.php?id=' . $item->id) ?>">
                                            <img width="540" height="540" src="<?= BASE_URL . '/' . $item->hinhanh ?> " class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Headphones" srcset="<?= BASE_URL . '/' . $item->hinhanh ?>" sizes="(max-width: 540px) 100vw, 540px" /> <span class="product-title"></span>
                                        </a>
                                        <div class="price"><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>55.00</span></div>
                                        <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 0 out of 5">
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
                                        </div>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </aside>
                <?php endif ?>
            </div>
            <!-- Finish Sidebar -->
        </div>
    </div>
</div>
<!-- Finish Middle -->
<?php require_once('./layouts/page/footer.php') ?>
