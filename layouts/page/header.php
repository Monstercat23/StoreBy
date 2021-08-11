<?php
$cart = Session::get('cart');
$total = 0;
$countProduct = 0;

if (is_array($cart)) {
    foreach ($cart as $item) {
        $total += $item->so_luong_mua * $item->giaban;
        $countProduct++;
    }
}

$sql = "SELECT * FROM danhmuc";
$categories = $DB->query($sql);
$currentPage = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?= $title ?> - PhoneStore</title>
    <link rel='stylesheet' id='validate-engine-css-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/wysija-newsletters/css/validationEngine.jquery2aca.css?ver=2.13' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='layerslider-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/LayerSlider/assets/static/layerslider/css/layerslider3584.css?ver=6.11.1' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='<?= BASE_URL . 'layouts/page/assets/wp-includes/css/dist/block-library/style.min7661.css?ver=5.4.2' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style60a8.css?ver=2.5.16' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min1849.css?ver=4.7.0' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style521d.css?ver=3.0.10' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/contact-form-7/includes/css/styles38c6.css?ver=5.1.9' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-law-info-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public3cf4.css?ver=1.8.8' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-law-info-gdpr-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-gdpr3cf4.css?ver=1.8.8' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/revslider/public/assets/css/rs60192.css?ver=6.2.9' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='yith_wcas_frontend-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/css/yith_wcas_ajax_search7661.css?ver=5.4.2' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-colorbox-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox7661.css?ver=5.4.2' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='ywpc-google-fonts-css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' type='text/css' media='all' />
    <link rel='stylesheet' id='ywpc-frontend-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/css/ywpc-style-1.min7661.css?ver=5.4.2' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='yith-quick-view-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view1159.css?ver=1.4.2' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/woocommerce/assets/css/prettyPhoto7661.css?ver=5.4.2' ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='devicer-theme-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen, print' />
    <link rel='stylesheet' id='devicer-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/theme-framework/theme-style/css/style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen, print' />
    <link rel='stylesheet' id='devicer-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/theme-framework/theme-style/css/adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen, print' />
    <link rel='stylesheet' id='devicer-retina-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/theme-framework/theme-style/css/retina8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-icons-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/css/fontello8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-icons-custom-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/theme-vars/theme-style/css/fontello-custom8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='animate-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/css/animate8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='ilightbox-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/css/ilightbox3601.css?ver=2.2.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='ilightbox-skin-dark-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/css/ilightbox-skins/dark-skin3601.css?ver=2.2.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-fonts-schemes-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/uploads/cmsmasters_styles/devicer8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='google-fonts-css' href='http://fonts.googleapis.com/css?family=Heebo%3A100%2C300%2C400%2C500%2C700%2C800%2C900&amp;ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='devicer-gutenberg-frontend-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/gutenberg/cmsmasters-framework/theme-style/css/frontend-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-woocommerce-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-woocommerce-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-quick-view-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-quick-view/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-quick-view-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-quick-view/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-zoom-magnifier-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-zoom-magnifier/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-zoom-magnifier-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-zoom-magnifier/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-wishlist-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-wishlist/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-wishlist-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-wishlist/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-ajax-search-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-ajax-search/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-ajax-search-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-ajax-search/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-product-countdown-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-product-countdown/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-product-countdown-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-product-countdown/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-compare-style-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-compare/css/plugin-style8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />
    <link rel='stylesheet' id='devicer-yith-woocommerce-compare-adaptive-css' href='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-compare/css/plugin-adaptive8a54.css?ver=1.0.0' ?>' type='text/css' media='screen' />

    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp ' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1 ' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utils3584.js?ver=6.11.1' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jquery3584.js?ver=6.11.1' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitions3584.js?ver=6.11.1' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/cookie-law-info/public/js/cookie-law-info-public3cf4.js?ver=1.8.8' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/revslider/public/assets/js/rbtools.min52c7.js?ver=6.0.5' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/revslider/public/assets/js/rs6.min0192.js?ver=6.2.9' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/js/jquery.plugin.min7661.js?ver=5.4.2' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/js/jquery.countdown.min4c56.js?ver=2.0.2' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/js/debounced-resize.min8a54.js?ver=1.0.0' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/js/modernizr.min8a54.js?ver=1.0.0' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/js/respond.min8a54.js?ver=1.0.0' ?>'></script>
    <script type='text/javascript' src='<?= BASE_URL . 'layouts/page/assets/wp-content/themes/devicer/js/jquery.iLightBox.min3601.js?ver=2.2.0' ?>'></script>

    <link rel='stylesheet' id='ls-google-fonts-css' href='https://fonts.googleapis.com/css?family=Heebo:300&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />

    <link rel="icon" href='<?= BASE_URL . 'layouts/page/assets/wp-content/uploads/2018/02/cropped-favicon-1-75x75.png ' ?>' sizes="32x32" />
    <link rel="icon" href='<?= BASE_URL . 'layouts/page/assets/wp-content/uploads/2018/02/cropped-favicon-1-300x300.png' ?>' sizes="192x192" />
    <link rel="apple-touch-icon" href='<?= BASE_URL . 'layouts/page/assets/wp-content/uploads/2018/02/cropped-favicon-1-300x300.png' ?>' />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL . "layouts/page/assets/page.css" ?>" />


    <!-- MY CSS - JS -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL . "public/dist/css/app.min.css" ?>" />
    <script type="text/javascript" src="<?= BASE_URL . "public/dist/app.min.js" ?>"></script>
    <script type="text/javascript" src="<?= BASE_URL . "public/assets/page/js/serREVStartSize.js" ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-14388 theme-devicer woocommerce-no-js ywcas-devicer">

    <div class="cmsmasters_header_search_form">
        <span class="cmsmasters_header_search_form_close cmsmasters_theme_icon_cancel"></span>
        <div class="yith-ajaxsearchform-container">
            <form role="search" method="get" class="yith-ajaxsearchform_form" action="">
                <div class="yith-ajaxsearchform-container">
                    <div class="yith-ajaxsearchform-select">
                        <select class="search_categories selectbox" name="product_cat">
                            <option value="" selected='selected'>Danh mục sản phẩm</option>
                            <?php foreach ($categories as $item) : ?>
                                <option value="<?= $item->id ?>"><?= $item->tendanhmuc ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="search_bar_wrap">
                        <div class="search-navigation search_field">
                            <input type="search" value="" name="s" class="yith-s" placeholder="Search for products" data-append-to=".search-navigation" data-loader-icon="" data-min-chars="3" />
                        </div>
                        <div class="search_button">
                            <button type="submit" class="cmsmasters-icon-search" value=""></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="page" class="csstransition cmsmasters_liquid fullwidth fixed_header enable_header_top enable_header_bottom enable_header_left enable_header_bottom cmsmasters_heading_under_header hfeed site">
        <!-- Start Main -->
        <div id="main">
            <!-- Start Header -->
            <header id="header" style="margin-bottom:40px">
                <div class="header_top" data-height="40">
                    <div class="header_top_outer">
                        <div class="header_top_inner">
                            <div class="top_nav_wrap">
                                <a class="responsive_top_nav" href="javascript:void(0)">
                                    <span></span>
                                </a>
                                <nav>
                                    <div class="m-2">
                                        <ul class="">
                                            <?php if (!Auth::customer()) : ?>
                                                <li class="mx-1">
                                                    <a href="login.php" class="m-0 p-0">
                                                        <button class="" type="button">Đăng nhập</button>
                                                    </a>
                                                </li>
                                                <li class="mx-1">
                                                    <a href="register.php" class="m-0 p-0">
                                                        <button class="" type="button">Đăng ký</button>
                                                    </a>
                                                </li>
                                            <?php else : ?>
                                                <li class="mx-1">
                                                    <a class="text-center pr-2" href="#">
                                                        <?= Auth::customer()->hoten ?>
                                                    </a>
                                                </li>
                                                <li class="mx-1">
                                                    <a href="logout.php">
                                                        <button class="" type="button"> Đăng xuất</button>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="header_top_meta">
                                <div class="meta_wrap">
                                    Chào mừng đến với MeowStore
                                    <span class="cmsmasters_customer_care">
                                        Chăm sóc khách hàng
                                    </span>
                                    <a href="tel:09843434434">0973 490 023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_top_but closed"><span class="cmsmasters_theme_icon_slide_bottom"></span></div>
                </div>
                <div class="header_mid default_mid_header" data-height="110">
                    <div class="header_mid_outer">
                        <div class="header_mid_inner">
                            <div class="logo_wrap"><a href="<?= url('') ?>" title="PhoneStore" class="logo">
                                    MeowStore
                                </a>
                            </div>
                            <div class="cmsmasters_dynamic_cart_wrap">
                                <div class="cmsmasters_dynamic_cart"><a href="javascript:void(0)" class="cmsmasters_dynamic_cart_button"><span class="count_wrap cmsmasters_icon_custom_cart_1"><span class="count cmsmasters_dynamic_cart_count"><?= $countProduct ?></span></span></a>
                                    <div class="cmsmasters_cart_info">
                                        <p>Giỏ hàng</p>
                                        <p class="cmsmasters_subtotal_shop"><span class="woocommerce-Price-amount amount"><span><?= number_format($total) . ' vnđ' ?></span>
                                        </p>
                                    </div>
                                    <div class="widget_shopping_cart_content giohang" style="opacity: 1;">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <?php if (is_array($cart)) : ?>
                                                <?php foreach ($cart as $item) : ?>
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="<?= url('product-detail.php?id=' . $item->id) ?>"></a> <a href="<?= url('product-detail.php?id=' . $item->id) ?>">
                                                            <img width="540" height="540" src="<?= url('product-detail.php?id=' . $item->id) ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="<?= BASE_URL . '/' . $item->hinhanh ?>" sizes="(max-width: 540px) 100vw, 540px"> <?= $item->tensanpham ?> </a>
                                                        <span class="quantity"><?= $item->so_luong_mua ?> × <span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">$</span></span><?= number_format($item->giaban) ?></span></span>
                                                    </li>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <strong>Tổng tiền:</strong> <span class="woocommerce-Price-amount amount"><span></span><?= number_format($total) . ' vnđ ' ?></span>
                                        </p>
                                        <p class="woocommerce-mini-cart__buttons buttons"><a href="cart.php" class="button wc-forward">Xem giỏ hàng</a><a href="checkout.php" class="button checkout wc-forward">Thanh toán</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="resp_mid_nav_wrap">
                                <div class="resp_mid_nav_outer"><a class="responsive_nav resp_mid_nav" href="javascript:void(0)"><span></span></a></div>
                            </div>
                            <div class="mid_search_but_wrap">
                                <div class="cmsmasters_header_search_form">
                                    <span class="cmsmasters_header_search_form_close cmsmasters_theme_icon_cancel"></span>
                                    <div class="yith-ajaxsearchform-container">
                                        <form role="search" method="get" class="yith-ajaxsearchform_form" action="search.php">
                                            <div class="yith-ajaxsearchform-container">
                                                <div class="yith-ajaxsearchform-select">
                                                    <select class="search_categories selectbox" name="category">
                                                        <option value="" selected='selected'>Danh mục sản phẩm</option>
                                                        <?php foreach ($categories as $item) : ?>
                                                            <option value="<?= $item->id ?>"><?= $item->tendanhmuc ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="search_bar_wrap">
                                                    <div class="search-navigation search_field">
                                                        <input type="search" value="" name="search" class="yith-s" placeholder="Tìm kiếm sản phẩm" data-append-to=".search-navigation" data-loader-icon="" data-min-chars="3" />
                                                    </div>
                                                    <div class="search_button">
                                                        <button type="submit" class="cmsmasters-icon-search" value=""></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><a href="cart/index.html" class="cmsmasters_header_cart_link"><span class="count_wrap cmsmasters_icon_custom_cart_1"><span class="count">0</span></span></a>
                            <div class="mid_search_but_wrap_resp"><a href="javascript:void(0)" class="mid_search_but cmsmasters_header_search_but cmsmasters_icon_custom_search"></a>
                            </div><!-- Start Navigation -->
                        </div>
                    </div>
                </div>
                <div class="header_bot" data-height="52">
                    <div class="header_bot_outer">
                        <div class="header_bot_inner"><span class="header_bot_border_top"></span>
                            <!-- Start Navigation -->
                            <div class="bot_nav_wrap">
                                <nav>
                                    <div class="menu-primary-navigation-container">
                                        <ul id="navigation" class="bot_nav navigation">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom <?= $currentPage == '/index.php' ? 'current-menu-ancestor' : '' ?> ">
                                                <a href="index.php"><span class="nav_item_wrap"><span class="nav_title">Trang chủ</span></span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14881 menu-item-depth-0 <?= $currentPage == '/shop.php' ? 'current-menu-ancestor' : '' ?>">
                                                <a href="shop.php"><span class="nav_item_wrap"><span class="nav_title">Cửa hàng</span></span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14881 menu-item-depth-0 <?= $currentPage == '/blog.php' ? 'current-menu-ancestor' : '' ?>">
                                                <a href="blog.php"><span class="nav_item_wrap"><span class="nav_title">Tin tức</span></span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14881 menu-item-depth-0 <?= $currentPage == '/contact.php' ? 'current-menu-ancestor' : '' ?>">
                                                <a href="contact.php"><span class="nav_item_wrap"><span class="nav_title">Liên hệ</span></span></a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14881 menu-item-depth-0 <?= $currentPage == '/about.php' ? 'current-menu-ancestor' : '' ?>">
                                                <a href="about.php"><span class="nav_item_wrap"><span class="nav_title">Giới thiệu</span></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Finish Header -->

            <!-- Start Page -->
