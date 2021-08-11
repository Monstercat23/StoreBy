<?php

require_once './autoload/Autoload.php';

$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sanpham.id DESC LIMIT 4 ";
$productRecent = $DB->query($sql);

$Featured = rand(10, 20);
$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham  JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id ORDER BY sanpham.id DESC  LIMIT 4 OFFSET $Featured";
$productFeatured = $DB->query($sql);

$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE danhgia >= 3 ORDER BY sanpham.id DESC LIMIT 4 ";
$productTopRate = $DB->query($sql);

$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY sale DESC LIMIT 4 ";
$productSale = $DB->query($sql);

$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id  ORDER BY luotmua DESC LIMIT 8 ";
$productSeller = $DB->query($sql);

$sql = "SELECT baiviet.*, danhmuc_blog.tendanhmuc FROM baiviet JOIN danhmuc_blog ON baiviet.danhmuc_id = danhmuc_blog.id  ORDER BY id DESC LIMIT 5 ";
$news = $DB->query($sql);

$title = "Home";
require_once './layouts/page/header.php';

?>

<!-- Start Middle -->
<main id="index">
    <div class="middle_inner">
        <div class="content_wrap fullwidth">
            <div class="middle_content entry"></div>
        </div>
        <div id="cmsmasters_row_v3aq3eblx8" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner cmsmasters_row_no_margin">
                        <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
                            <div id="cmsmasters_column_4cndef00ts" class="cmsmasters_column one_fourth">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_icon_box_s6bukh5wrk" class="cmsmasters_icon_box cmsmasters_icon_box_left box_icon_type_icon cmsmasters-icon-home-3">
                                        <div class="icon_box_inner">
                                            <h4 class="icon_box_heading">Giao hàng tận nhà</h4>
                                            <div class="icon_box_text">
                                                <div id="cmsmasters_heading_s6bukh5wrk" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h6 class="cmsmasters_heading">Free for all oder</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_lvw5xv7qot" class="cmsmasters_column one_fourth">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_icon_box_aabg0ntkhs" class="cmsmasters_icon_box cmsmasters_icon_box_left box_icon_type_icon cmsmasters-icon-paper-plane-4">
                                        <div class="icon_box_inner">
                                            <h4 class="icon_box_heading">100% Hoàn lại nếu sản phẩm lỗi</h4>
                                            <div class="icon_box_text">
                                                <div id="cmsmasters_heading_aabg0ntkhs" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h6 class="cmsmasters_heading"> Cash Back </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_tb08ofbhnh" class="cmsmasters_column one_fourth">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_icon_box_8ysm15xr5" class="cmsmasters_icon_box cmsmasters_icon_box_left box_icon_type_icon cmsmasters-icon-shield-1">
                                        <div class="icon_box_inner">
                                            <h4 class="icon_box_heading">Hỗ trợ khách hàng</h4>
                                            <div class="icon_box_text">
                                                <div id="cmsmasters_heading_8ysm15xr5" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h6 class="cmsmasters_heading"> Fast Service&nbsp; </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_6ljk3qzywg" class="cmsmasters_column one_fourth">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_icon_box_90a0y17d1o" class="cmsmasters_icon_box cmsmasters_icon_box_left box_icon_type_icon cmsmasters-icon-rocket-2">
                                        <div class="icon_box_inner">
                                            <h4 class="icon_box_heading">Giao hàng cực nhanh</h4>
                                            <div class="icon_box_text">
                                                <div id="cmsmasters_heading_90a0y17d1o" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                    <h6 class="cmsmasters_heading"> Best Service </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cmsmasters_row_s8yooem3lj" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
                            <div id="cmsmasters_column_j3ay112m5a" class="cmsmasters_column one_half cmsmasters_adaptive_margin_column">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_l1z6xzbnab" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h3 class="cmsmasters_heading">New Step</h3>
                                    </div>
                                    <div id="cmsmasters_heading_u8mnwy0dtl" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading">
                                            <a href="#">Apple IPhone</a>
                                        </h2>
                                    </div>
                                    <div id="cmsmasters_heading_87fp83eq3z" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h6 class="cmsmasters_heading">Starting at </h6>
                                    </div>
                                    <div id="cmsmasters_heading_inbcph5oop" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading">$599</h2>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_vj48l2a3f" class="cmsmasters_column one_half">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_7jr8wlsx0h" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h3 class="cmsmasters_heading">One Shot</h3>
                                    </div>
                                    <div id="cmsmasters_heading_nii56ij93t" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading">
                                            <a href="#">IMac Pro </a>
                                        </h2>
                                    </div>
                                    <div id="cmsmasters_heading_o101lvajbg" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h6 class="cmsmasters_heading">Starting at </h6>
                                    </div>
                                    <div id="cmsmasters_heading_9eg3zixwlf" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading">$5199</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cmsmasters_row_mwi4x9y95f" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
                            <div id="cmsmasters_column_cad331ga3" class="cmsmasters_column one_third">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_product_single_shortcode_eo34cf91g" class="cmsmasters_product_single_shortcode small_product">
                                        <div class="woocommerce">
                                            <ul class="products cmsmasters_products">
                                                <li class="post-13141 product type-product status-publish has-post-thumbnail product_cat-cell-phones product_cat-meizu first instock sale shipping-taxable purchasable product-type-simple">
                                                    <article class="cmsmasters_product">
                                                        <div class="cmsmasters_product_wrapper_border">
                                                            <figure class="cmsmasters_product_img">
                                                                <a href="#">
                                                                    <img width="300" height="300" src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2017/09/1-3-300x300.jpg' ?> " class="attachment-medium size-medium" alt="" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/09/1-3-300x300.jpg 300w' ?> " sizes="(max-width: 300px) 100vw, 300px" />
                                                                </a>
                                                                <div class="cmsmasters_product_sale_wrap">
                                                                    <div class="cmsmasters_product_sale_wrap">
                                                                        <span class="onsale">Sale!</span>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="cmsmasters_product_inner">
                                                                <header class="cmsmasters_product_header entry-header">
                                                                    <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 4.00 out of 5">
                                                                        <div class="cmsmasters_star_trans_wrap">
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                        </div>
                                                                        <div class="cmsmasters_star_color_wrap" data-width="width:80%">
                                                                            <div class="cmsmasters_star_color_inner">
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="rating dn"><strong itemprop="ratingValue">4.00</strong>
                                                                            out of 5</span>
                                                                    </div>
                                                                    <h3 class="cmsmasters_product_title entry-title">
                                                                        <a href="#">Meizu M6 Note Blue</a>
                                                                    </h3>
                                                                </header>
                                                                <div class="cmsmasters_product_info_wrap">
                                                                    <div class="cmsmasters_product_info">
                                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>400.00</span></del>
                                                                            <ins><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>350.00</span></ins></span>
                                                                    </div>
                                                                    <div class="ywpc-countdown-loop ywpc-item-13141">
                                                                        <div class="ywpc-header">
                                                                        </div>
                                                                        <div class="ywpc-timer">
                                                                            <div class="ywpc-days">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">0</span>
                                                                                    <span class="ywpc-char-2">-</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Ngày </div>
                                                                            </div>
                                                                            <div class="ywpc-hours">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">1</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giờ </div>
                                                                            </div>
                                                                            <div class="ywpc-minutes">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">5</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Phút </div>
                                                                            </div>
                                                                            <div class="ywpc-seconds">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">3</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giây </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" value="2019.3.30">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="button yith-wcqv-button" data-product_id="13141"></a>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_bufawww5um" class="cmsmasters_column one_third">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_product_single_shortcode_xud0esa8um" class="cmsmasters_product_single_shortcode small_product">
                                        <div class="woocommerce">
                                            <ul class="products cmsmasters_products">
                                                <li class="post-13112 product type-product status-publish has-post-thumbnail product_cat-asus product_cat-laptops  instock sale shipping-taxable purchasable product-type-simple">
                                                    <article class="cmsmasters_product">
                                                        <div class="cmsmasters_product_wrapper_border">
                                                            <figure class="cmsmasters_product_img">
                                                                <a href="#">
                                                                    <img width="300" height="300" src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2017/09/2-3-300x300.jpg' ?> " class="attachment-medium size-medium" alt="" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/09/2-3-300x300.jpg 300w' ?> " sizes="(max-width: 300px) 100vw, 300px" />
                                                                </a>
                                                                <div class="cmsmasters_product_sale_wrap">
                                                                    <div class="cmsmasters_product_sale_wrap">
                                                                        <span class="onsale">Sale!</span>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="cmsmasters_product_inner">
                                                                <header class="cmsmasters_product_header entry-header">
                                                                    <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 4.00 out of 5">
                                                                        <div class="cmsmasters_star_trans_wrap">
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                        </div>
                                                                        <div class="cmsmasters_star_color_wrap" data-width="width:80%">
                                                                            <div class="cmsmasters_star_color_inner">
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="rating dn">
                                                                            <strong itemprop="ratingValue">4.00</strong> out of 5
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="cmsmasters_product_title entry-title">
                                                                        <a href="#">Asus Zenbook</a>
                                                                    </h3>
                                                                </header>
                                                                <div class="cmsmasters_product_info_wrap">
                                                                    <div class="cmsmasters_product_info">
                                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>1,100.00</span></del>
                                                                            <ins><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>900.00</span></ins></span>
                                                                    </div>
                                                                    <div class="ywpc-countdown-loop ywpc-item-13112">
                                                                        <div class="ywpc-header">
                                                                        </div>
                                                                        <div class="ywpc-timer">
                                                                            <div class="ywpc-days">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">0</span>
                                                                                    <span class="ywpc-char-2">-</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Ngày </div>
                                                                            </div>
                                                                            <div class="ywpc-hours">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">1</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giờ </div>
                                                                            </div>
                                                                            <div class="ywpc-minutes">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">5</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Phút </div>
                                                                            </div>
                                                                            <div class="ywpc-seconds">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">3</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giây </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" value="2019.3.30">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="button yith-wcqv-button" data-product_id="13112"></a>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_xcpu5k5vt" class="cmsmasters_column one_third">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_product_single_shortcode_q2ojcyxl26" class="cmsmasters_product_single_shortcode small_product">
                                        <div class="woocommerce">
                                            <ul class="products cmsmasters_products">
                                                <li class="post-1663 product type-product status-publish has-post-thumbnail product_cat-samsung-smart-watches product_cat-smart-technologies last instock sale shipping-taxable purchasable product-type-simple">
                                                    <article class="cmsmasters_product">
                                                        <div class="cmsmasters_product_wrapper_border">
                                                            <figure class="cmsmasters_product_img">
                                                                <a href="#">
                                                                    <img width="300" height="300" src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2017/05/4-300x300.jpg ' ?> " class="attachment-medium size-medium" alt="" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/05/4-300x300.jpg 300w ' ?> ">
                                                                </a>
                                                                <div class="cmsmasters_product_sale_wrap">
                                                                    <div class="cmsmasters_product_sale_wrap">
                                                                        <span class="onsale">Sale!</span>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="cmsmasters_product_inner">
                                                                <header class="cmsmasters_product_header entry-header">
                                                                    <div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/AggregateRating" title="Rated 4.00 out of 5">
                                                                        <div class="cmsmasters_star_trans_wrap">
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
                                                                        </div>
                                                                        <div class="cmsmasters_star_color_wrap" data-width="width:80%">
                                                                            <div class="cmsmasters_star_color_inner">
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="rating dn"><strong itemprop="ratingValue">4.00</strong>
                                                                            out of 5</span>
                                                                    </div>
                                                                    <h3 class="cmsmasters_product_title entry-title">
                                                                        <a href="#">Samsung Gear Blue</a>
                                                                    </h3>
                                                                </header>
                                                                <div class="cmsmasters_product_info_wrap">
                                                                    <div class="cmsmasters_product_info">
                                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>40.00</span></del>
                                                                            <ins><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>20.00</span></ins></span>
                                                                    </div>
                                                                    <div class="ywpc-countdown-loop ywpc-item-1663">
                                                                        <div class="ywpc-header">
                                                                        </div>
                                                                        <div class="ywpc-timer">
                                                                            <div class="ywpc-days">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">0</span>
                                                                                    <span class="ywpc-char-2">-</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Ngày </div>
                                                                            </div>
                                                                            <div class="ywpc-hours">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">1</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giờ </div>
                                                                            </div>
                                                                            <div class="ywpc-minutes">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">5</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Phút </div>
                                                                            </div>
                                                                            <div class="ywpc-seconds">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">3</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giây </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" value="2019.3.30">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="button yith-wcqv-button" data-product_id="1663"></a>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start List Products -->
        <div id="cmsmasters_row_451tgvuy" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_0y9d0nl7j" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <div class="cmsmasters_tabs tabs_mode_tab">
                                        <ul class="cmsmasters_tabs_list">
                                            <li id="cmsmasters_tabs_list_item_xhsr2nmwb" class="cmsmasters_tabs_list_item current_tab">
                                                <a href="#">
                                                    <span>Sản Phẩm Mới</span>
                                                </a>
                                            </li>
                                            <li id="cmsmasters_tabs_list_item_4e2hpv9pga" class="cmsmasters_tabs_list_item">
                                                <a href="#">
                                                    <span>Đặc Biệt</span>
                                                </a>
                                            </li>
                                            <li id="cmsmasters_tabs_list_item_hn0wjvrbh" class="cmsmasters_tabs_list_item">
                                                <a href="#">
                                                    <span>Đánh Giá Tốt</span>
                                                </a>
                                            </li>
                                            <li id="cmsmasters_tabs_list_item_1pnxosym4r" class="cmsmasters_tabs_list_item">
                                                <a href="#">
                                                    <span>Giảm Giá</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="cmsmasters_tabs_wrap">
                                            <!-- Start Product Recent -->
                                            <div id="cmsmasters_tab_xhsr2nmwb" class="cmsmasters_tab active_tab">
                                                <div class="cmsmasters_tab_inner">
                                                    <div class="cmsmasters_products_shortcode cmsmasters_recent_products">
                                                        <div class="woocommerce columns-4 ">
                                                            <ul class="products columns-4 cmsmasters_products">
                                                                <?php foreach ($productRecent as $item) : ?>
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
                                                                                            <span>
                                                                                                <span class="woocommerce-Price-amount amount"></span>
                                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                                    <?= number_format($item->giaban) . ' vnđ' ?>
                                                                                                </span>
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
                                                                                            <span class="rating dn"><strong itemprop="ratingValue">5.00</strong>
                                                                                                out of 5</span>
                                                                                        </div>
                                                                                        <div class="cmsmasters_product_add_wrap">
                                                                                            <div class="cmsmasters_product_add_inner">
                                                                                                <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart">
                                                                                                    <span>Thêm vào giỏ hàng</span>
                                                                                                </a>
                                                                                                <!-- <a href="<?= url('add-cart.php?id=' . $item->id) ?>" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart">
                                                                                                    <span>View Cart</span>
                                                                                                </a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Recent -->
                                            <!-- Start Product Featured -->
                                            <div id="cmsmasters_tab_4e2hpv9pga" class="cmsmasters_tab">
                                                <div class="cmsmasters_tab_inner">
                                                    <div class="cmsmasters_products_shortcode cmsmasters_recent_products">
                                                        <div class="woocommerce columns-4 ">
                                                            <ul class="products columns-4 cmsmasters_products">
                                                                <?php foreach ($productFeatured as $item) : ?>
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
                                                                                            <span class="rating dn"><strong itemprop="ratingValue">5.00</strong>
                                                                                                out of 5</span>
                                                                                        </div>
                                                                                        <div class="cmsmasters_product_add_wrap">
                                                                                            <div class="cmsmasters_product_add_inner">
                                                                                                <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart">
                                                                                                    <span>Thêm vào giỏ hàng</span>
                                                                                                </a>
                                                                                                <!-- <a href="<?= url('add-cart.php?id=' . $item->id) ?>" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart">
                                                                                                    <span>View Cart</span>
                                                                                                </a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Featured -->
                                            <!-- Start Product TopRate -->
                                            <div id="cmsmasters_tab_hn0wjvrbh" class="cmsmasters_tab">
                                                <div class="cmsmasters_tab_inner">
                                                    <div class="cmsmasters_products_shortcode cmsmasters_recent_products">
                                                        <div class="woocommerce columns-4 ">
                                                            <ul class="products columns-4 cmsmasters_products">
                                                                <?php foreach ($productTopRate as $item) : ?>
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
                                                                                            <span class="rating dn"><strong itemprop="ratingValue">5.00</strong>
                                                                                                out of 5</span>
                                                                                        </div>
                                                                                        <div class="cmsmasters_product_add_wrap">
                                                                                            <div class="cmsmasters_product_add_inner">
                                                                                                <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart">
                                                                                                    <span>Thêm vào giỏ hàng</span>
                                                                                                </a>
                                                                                                <!-- <a href="<?= url('add-cart.php?id=' . $item->id) ?>" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart">
                                                                                                    <span>View Cart</span>
                                                                                                </a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product TopRate -->
                                            <!-- Start Product Sale -->
                                            <div id="cmsmasters_tab_1pnxosym4r" class="cmsmasters_tab">
                                                <div class="cmsmasters_tab_inner">
                                                    <div class="cmsmasters_products_shortcode cmsmasters_recent_products">
                                                        <div class="woocommerce columns-4 ">
                                                            <ul class="products columns-4 cmsmasters_products">
                                                                <?php foreach ($productSale as $item) : ?>
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
                                                                                            <span class="rating dn"><strong itemprop="ratingValue">5.00</strong>
                                                                                                out of 5</span>
                                                                                        </div>
                                                                                        <div class="cmsmasters_product_add_wrap">
                                                                                            <div class="cmsmasters_product_add_inner">
                                                                                                <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart">
                                                                                                    <span>Thêm vào giỏ hàng</span>
                                                                                                </a>
                                                                                                <!-- <a href="<?= url('add-cart.php?id=' . $item->id) ?>"" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart">
                                                                                                    <span>View Cart</span>
                                                                                                </a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Sale -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End List Products -->

        <!-- Start Deal of the days -->
        <div id="cmsmasters_row_p1qnuk3b7o" style="background: url(<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2017/12/subtle_dots-95-5-2.jpg' ?>)" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_1wosllfwj" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_8cxkp0ygco" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h3 class="cmsmasters_heading">Giảm giá sập sàn</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cmsmasters_row_s9vctrzr1o" style="background: url(<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2017/12/subtle_dots-95-5-2.jpg' ?>)" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
                            <div id="cmsmasters_column_t28trz0nd3" class="cmsmasters_column three_fourth">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_product_single_shortcode_xwqw4h7j8c" class="cmsmasters_product_single_shortcode full_product">
                                        <div class="woocommerce">
                                            <ul class="products cmsmasters_products">
                                                <li class="post-1667 product type-product status-publish has-post-thumbnail product_cat-action-camcorders product_cat-cameras first instock sale shipping-taxable purchasable product-type-simple">
                                                    <article class="cmsmasters_product">
                                                        <div class="cmsmasters_product_wrapper_border">
                                                            <figure class="cmsmasters_product_img">
                                                                <a href="#">
                                                                    <img width="600" height="600" src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/05/9-3.jpg ' ?> " class="attachment-large size-large" alt="" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2015/05/9-3.jpg 600w' ?> " sizes="(max-width: 600px) 100vw, 600px" />
                                                                </a>
                                                                <div class="cmsmasters_product_sale_wrap">
                                                                    <div class="cmsmasters_product_sale_wrap">
                                                                        <span class="onsale">Sale!</span>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="cmsmasters_product_inner">
                                                                <header class="cmsmasters_product_header entry-header">
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
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="rating dn"><strong itemprop="ratingValue">5.00</strong>
                                                                            out of 5</span>
                                                                    </div>
                                                                    <h3 class="cmsmasters_product_title entry-title">
                                                                        <a href="product/polaroid-cube/index.html">Polaroid
                                                                            Cube+</a>
                                                                    </h3>
                                                                </header>
                                                                <div class="cmsmasters_product_info_wrap">
                                                                    <div class="cmsmasters_product_info">
                                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>200.00</span></del>
                                                                            <ins><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>168.00</span></ins></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing elit, sed do
                                                                        eiusmo em solo tempor incididunt ut
                                                                        labore et dolore magna.</p>
                                                                    <div class="ywpc-countdown-loop ywpc-item-1667">
                                                                        <div class="ywpc-header">
                                                                        </div>
                                                                        <div class="ywpc-timer">
                                                                            <div class="ywpc-days">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">0</span>
                                                                                    <span class="ywpc-char-2">-</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Ngày </div>
                                                                            </div>
                                                                            <div class="ywpc-hours">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">0</span>
                                                                                    <span class="ywpc-char-2">4</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giờ </div>
                                                                            </div>
                                                                            <div class="ywpc-minutes">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">3</span>
                                                                                    <span class="ywpc-char-2">6</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Phút </div>
                                                                            </div>
                                                                            <div class="ywpc-seconds">
                                                                                <div class="ywpc-amount">
                                                                                    <span class="ywpc-char-1">3</span>
                                                                                    <span class="ywpc-char-2">7</span>
                                                                                </div>
                                                                                <div class="ywpc-label">
                                                                                    Giây </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" value="2019.3.30">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_hb0m4gk4m" class="cmsmasters_column one_fourth cmsmasters_margin_deal">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_k9kdtiyapv" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading"> Best Digital</h2>
                                    </div>
                                    <div id="cmsmasters_heading_eviv6akfvo" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading">
                                            <a href="#">Sale IPhone X </a>
                                        </h2>
                                    </div>
                                    <div class="cmsmasters_text">
                                        <p><del><span style="color: #8f8f93; font-weight: 400;">$2400</span></del>
                                        </p>
                                    </div>
                                    <div id="cmsmasters_heading_8rz68ax0ju" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h2 class="cmsmasters_heading">$1199</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Deal of the days -->
        <div id="cmsmasters_row_5ngve7yoia" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_7ayz75cv47" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start selling products -->
        <div id="cmsmasters_row_bm9rhmsqk" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_x0ghpeoikm" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_7lmk1zy0i" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h3 class="cmsmasters_heading">Sản phẩm bán chạy</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cmsmasters_row_p9setlqh3" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_8to02ngdcc" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <div class="cmsmasters_posts_slider cmsmasters_posts_slider_product">
                                        <div id="cmsmasters_slider_pn4o451gd" class="cmsmasters_owl_slider owl-carousel" data-items="4" data-single-item="false" data-auto-play="5000">
                                            <?php foreach ($productSeller as $item) : ?>
                                                <div class="cmsmasters_owl_slider_item">
                                                    <!-- Start Posts Slider Product Article -->
                                                    <article id="post-1666" class="cmsmasters_slider_product cmsmasters_product post-1666 product type-product status-publish has-post-thumbnail product_cat-computer-hardware product_cat-powerbank  instock shipping-taxable purchasable product-type-simple">
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
                                                                        <span class="rating dn"><strong itemprop="ratingValue">5.00</strong>
                                                                            out of 5</span>
                                                                    </div>
                                                                    <div class="cmsmasters_product_add_wrap">
                                                                        <div class="cmsmasters_product_add_inner">
                                                                            <a href="<?= url('add-cart.php?id=' . $item->id) ?>" data-product_id="1631" data-product_sku="" class="cmsmasters_product_button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple ajax_add_to_cart" title="Add to Cart"><span>Add
                                                                                    to
                                                                                    Cart</span></a><a href="<?= url('add-cart.php?id=' . $item->id) ?>"" class=" cmsmasters_product_button added_to_cart wc-forward" title="View Cart"><span>View
                                                                                    Cart</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Finish Posts Slider Product Article -->
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End selling products -->
        <!-- Start News -->
        <div id="cmsmasters_row_1u8ezg9uhn" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_ohob8g60x8" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_bro5b6pbqf" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                        <h3 class="cmsmasters_heading">Tin tức mới</h3>
                                    </div>
                                    <div class="cmsmasters_posts_slider cmsmasters_posts_slider_post">
                                        <div id="cmsmasters_slider_8hzhwo0ntb" class="cmsmasters_owl_slider owl-carousel" data-items="3" data-single-item="false" data-auto-play="5000">
                                            <?php foreach ($news as $item) : ?>
                                                <div class="cmsmasters_owl_slider_item">
                                                    <!-- Start Posts Slider Post Article -->
                                                    <article class="cmsmasters_slider_post post-85 post type-post status-publish format-image has-post-thumbnail hentry category-hi-tech post_format-post-format-image">
                                                        <div class="cmsmasters_slider_post_outer">
                                                            <div class="cmsmasters_slider_post_date_img_wrap">
                                                                <figure class="cmsmasters_img_rollover_wrap preloader">
                                                                    <img width="580" height="366" src="<?= BASE_URL . '/' . $item->hinhanh ?> " class="full-width wp-post-image" alt="Best care and support at Our Stores" title="blog5" />
                                                                    <div class="cmsmasters_img_rollover"><a href="blog-detail.php?id=<?= $item->id ?>" title="Best care and support at Our Stores" class="cmsmasters_open_link"></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="cmsmasters_slider_post_inner">
                                                                <footer class="cmsmasters_slider_post_footer entry-meta enable_post_meta">
                                                                    <span class="cmsmasters_slider_post_category"><?= $item->tendanhmuc ?></span>
                                                                    <div class="cmsmasters_slider_post_meta_info">
                                                                        <span class="cmsmasters_comments cmsmasters_slider_post_comments"><a class="cmsmasters_theme_icon_comment" href="2017/01/10/best-care-and-support-at-our-stores/index.html#respond" title="Comment on Best care and support at Our Stores"><span>0
                                                                                </span></a></span>
                                                                    </div>
                                                                </footer>
                                                                <header class="cmsmasters_slider_post_header entry-header">
                                                                    <h2 class="cmsmasters_slider_post_title entry-title">
                                                                        <a href="blog-detail.php?id=<?= $item->id ?>"><?= $item->tieude ?></a>
                                                                    </h2>
                                                                </header>
                                                                <div class="cmsmasters_slider_post_cont_info entry-meta">
                                                                    <span class="cmsmasters_slider_post_date"><?= formatDate($item->created_at) ?><span>
                                                                </div>
                                                            </div>
                                                    </article>
                                                    <!-- Finish Posts Slider Post Article -->
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End News -->
        <div id="cmsmasters_row_zogy1x9wzq" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_xq1kbt808f" class="cmsmasters_column one_first">
                                <div class="cmsmasters_column_inner">
                                    <div class="cmsmasters_clients_slider_wrap">
                                        <div id="cmsmasters_clients_d93z9smmxh" class="cmsmasters_owl_slider owl-carousel cmsmasters_clients_slider" data-items="5" data-single-item="false" data-auto-play="false" data-slide-speed="1000" data-pagination-speed="1000" data-pagination="false" data-navigation="false">
                                            <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                <img src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/04/1-2.png' ?>" alt="Adobe" title="Adobe" />
                                            </div>
                                            <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                <img src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/04/2-2.png' ?>" alt="Envato" title="Envato" />
                                            </div>
                                            <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                <img src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/04/3-2.png' ?>" alt="jQuery" title="jQuery" />
                                            </div>
                                            <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                <img src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/04/4-2.png' ?>" alt="WordPress" title="WordPress" />
                                            </div>
                                            <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                <img src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/04/6-2.png' ?>" alt="GitHub" title="GitHub" />
                                            </div>
                                            <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                <img src="<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2015/04/5-2.png' ?>" alt="Sass" title="Sass" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cmsmasters_row_ko7qf3fnaz" style="background: url(<?= BASE_URL . '/layouts/page/assets/wp-content/uploads/2017/12/subtle_dots-95-5-2.jpg' ?>)" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
            <div class="cmsmasters_row_outer_parent">
                <div class="cmsmasters_row_outer">
                    <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                        <div class="cmsmasters_row_margin">
                            <div id="cmsmasters_column_pkmpp0rffa" class="cmsmasters_column one_third">
                                <div class="cmsmasters_column_inner"></div>
                            </div>
                            <div id="cmsmasters_column_lbe4twdncd" class="cmsmasters_column one_third">
                                <div class="cmsmasters_column_inner">
                                    <div id="cmsmasters_heading_3i4zdubpad" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                        <h2 class="cmsmasters_heading">ĐĂNG KÝ THÀNH VIÊN</h2>
                                    </div>
                                    <div class="cmsmasters_mailpoet">
                                        <div class="cmsmasters_mailpoet_form">
                                            <div class="widget_wysija_cont shortcode_wysija">
                                                <div id="msg-form-wysija-shortcode5ee8606f3cc05-1" class="wysija-msg ajax"></div>
                                                <form id="form-wysija-shortcode5ee8606f3cc05-1" method="post" action="#wysija" class="widget_wysija shortcode_wysija">
                                                    <p class="wysija-paragraph">
                                                        <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Your Email..." placeholder="Your Email..." value="" />
                                                        <span class="abs-req">
                                                            <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
                                                        </span>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cmsmasters_heading_40qclsqalb" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                        <h6 class="cmsmasters_heading">Hãy subcribe để nhận những ưu đãi của cửa hàng </h6>
                                    </div>
                                </div>
                            </div>
                            <div id="cmsmasters_column_36jlgk9kl" class="cmsmasters_column one_third">
                                <div class="cmsmasters_column_inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cl"></div>
        <div class="content_wrap fullwidth">
            <div class="middle_content entry"></div>
            <!-- Finish Content -->
        </div>
    </div>
    </div>
    <!-- Finish Middle -->
    <!-- Start Bottom -->
    <!-- Finish Bottom -->
    <a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
</main>
<!-- Finish Main -->


<?php require_once('./layouts/page/footer.php') ?>
