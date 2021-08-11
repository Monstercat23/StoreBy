<?php
    $sql = "SELECT * FROM danhmuc LIMIT 5";
    $categories = $DB->query($sql);
?>

    <!-- Start Bottom -->
    <div id="bottom" class="cmsmasters_color_scheme_footer">
        <div class="bottom_bg">
            <div class="bottom_outer">
                <div class="bottom_inner sidebar_layout_14141414">
                    <aside id="text-2" class="widget widget_text">
                        <h3 class="widgettitle">Sản phẩm</h3>
                        <div class="textwidget">
                            <ul>
                                <?php foreach ($categories as $item) :?>
                                    <li>
                                        <a href="#"><?=$item->tendanhmuc ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </aside>
                    <aside id="text-4" class="widget widget_text">
                        <h3 class="widgettitle">Dịch vụ khách hàng</h3>
                        <div class="textwidget">
                            <ul>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="about.php">Về chúng tôi</a></li>
                                <li><a href="contacts.php">Liên hệ</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside id="text-3" class="widget widget_text">
                        <h3 class="widgettitle">Mạng xã hội</h3>
                        <div class="textwidget">
                            <ul>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">YouTube</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside id="text-5" class="widget widget_text">
                        <h3 class="widgettitle">Chăm sóc khách hàng</h3>
                        <div class="textwidget">
                            <ul>
                                <li><a href="#">Sale</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Giỏ hàng</a></li>
                                <li><a href="#">Sản phẩm của tôi</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- Finish Bottom -->
    <a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
    </div>
    <!-- Finish Main -->
    <!-- Start Footer -->
    <footer id="footer">
        <div class="footer cmsmasters_color_scheme_footer cmsmasters_footer_small">
            <div class="footer_inner">
                <div class="social_wrap">
                    <div class="social_wrap_inner">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/monstvtt/" class="cmsmasters_social_icon cmsmasters_social_icon_1 cmsmasters-icon-facebook-1" title="Facebook" target="_blank"></a>
                            </li>
                            <li>
                                <a href="https://myaccount.google.com/u/1/?rapt=AEjHL4OSYI03jewc0ThiPfckuArHOIa1YyB0XKSpZxAuIuhF8D3DJXahRSTK1BLEmB_FmHCJrRNWKPD2y5hV0l_5tFO1BOqMmg" class="cmsmasters_social_icon cmsmasters_social_icon_2 cmsmasters-icon-gplus-1" title="Google+" target="_blank"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ha.vtt23/" class="cmsmasters_social_icon cmsmasters_social_icon_3 cmsmasters-icon-instagram" title="Instagram" target="_blank"></a>
                            </li>
                            <li>
                                <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_4 cmsmasters-icon-twitter" title="Twitter" target="_blank"></a>
                            </li>
                            <li>
                                <a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_5 cmsmasters-icon-youtube-play" title="YouTube" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <span class="footer_copyright copyright text-center"> MeowStore © <?= date("Y") ?> | All Rights Reserved </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Finish Footer -->

    </div>
    <span class="cmsmasters_responsive_width"></span>
    <!-- Finish Page -->
    <div class="cli-modal" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
                    <svg class="" viewBox="0 0 24 24">
                        <path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                        </path>
                        <path d="M0 0h24v24h-24z" fill="none"></path>
                    </svg>
                    <span class="wt-cli-sr-only">Close</span>
                </button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text"></div>
                                    </div>
                                    <a class="cli-privacy-readmore" data-readmore-text="Show more" data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
                                            Necessary
                                        </a>
                                        <span class="cli-necessary-caption">Always Enabled</span> </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <p></p>
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
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <script type="text/javascript">
        cli_cookiebar_settings = '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#FFF","border":"#b1a6a6c2","border_on":false,"button_1_button_colour":"#000","button_1_button_hover":"#000000","button_1_link_colour":"#fff","button_1_as_button":true,"button_1_new_win":false,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":false,"button_2_hidebar":false,"button_3_button_colour":"#000","button_3_button_hover":"#000000","button_3_link_colour":"#fff","button_3_as_button":true,"button_3_new_win":false,"button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#fff","button_4_as_button":true,"font_family":"inherit","header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":false,"scroll_close_reload":false,"accept_close_reload":false,"reject_close_reload":false,"showagain_tab":true,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#000","show_once_yn":false,"show_once":"10000","logging_on":false,"as_popup":false,"popup_overlay":true,"bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"}';
    </script>

    <div id="yith-quick-view-modal">
        <div class="yith-quick-view-overlay"></div>
        <div class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
                </div>
                <div id="yith-quick-view-content" class="woocommerce single-product"></div>
            </div>
        </div>
    </div>
    <!-- modal  -->
    <div id="yith-quick-view-modal" class="close">
        <div class="yith-quick-view-overlay"></div>
        <div class="yith-wcqv-wrapper" style="left: 259.5px; top: 60px; width: 1000px; height: 470px;">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
                </div>
                <div id="yith-quick-view-content" class="woocommerce single-product">
                    <div class="product">
                        <div itemscope="" itemtype="http://schema.org/Product" id="product-1631" class="product post-1631 type-product status-publish has-post-thumbnail product_cat-cell-phones product_cat-xiaomi first instock shipping-taxable purchasable product-type-simple">
                            <div class="images cmsmasters_product_images">
                                <div data-thumb="wp-content/uploads/2015/05/6-100x100.jpg" class="woocommerce-product-gallery__image"><a href="wp-content/uploads/2015/05/6.jpg" class="cmsmasters_product_image" rel="ilightbox[cmsmasters_product_gallery]"><img width="600" height="600" src="wp-content/uploads/2015/05/6-600x600.jpg" class="wp-post-image" alt="" title="6" data-caption="" data-src="wp-content/uploads/2015/05/6.jpg" data-large_image="wp-content/uploads/2015/05/6.jpg" data-large_image_width="600" data-large_image_height="600" srcset="wp-content/uploads/2015/05/6.jpg 600w, wp-content/uploads/2015/05/6-150x150.jpg 150w, wp-content/uploads/2015/05/6-300x300.jpg 300w, wp-content/uploads/2015/05/6-75x75.jpg 75w, wp-content/uploads/2015/05/6-580x580.jpg 580w, wp-content/uploads/2015/05/6-540x540.jpg 540w, wp-content/uploads/2015/05/6-100x100.jpg 100w" sizes="(max-width: 600px) 100vw, 600px"></a></div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="summary-content">
                                    <div class="cmsmasters_product_title_info_wrap">
                                        <div class="cmsmasters_product_title_wrap">
                                            <h1 class="product_title entry-title">Xiaomi Mi Mix 2</h1>
                                        </div>
                                        <div class="cmsmasters_product_info_wrap">
                                            <p class="price"><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">$</span></span>55.00</span></p>
                                            <div class="cmsmasters_star_rating" itemscope="" itemtype="//schema.org/AggregateRating" title="Rated 5.00 out of 5">
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
                                                <span class="rating dn"><strong itemprop="ratingValue">5.00</strong> out of 5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cmsmasters_product_content">
                                        <div class="woocommerce-product-details__short-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique nibh ac ligula dapibus, quis ornare felis malesuada. Cras in feugiat diam. Donec euismod purus lorem, vel euismod sem pharetra at. Integer elit nulla, aliquet eget nisi lobortis, varius accumsan dui. Quisque semper dolor nibh, ac aliquet quam vehicula a. Aenean id consequat sapien, venenatis feugiat neque. Donec sit amet elit non ante eleifend sagittis sit amet eget mauris. Vestibulum nec pretium leo, sed lacinia odio. Vestibulum et tempor nunc. Etiam mattis porttitor lectus, vel egestas nunc dignissim ut.</p>
                                        </div>
                                    </div>
                                    <form class="cart" action="" method="post" enctype="multipart/form-data">
                                        <div class="quantity">
                                            <label class="screen-reader-text" for="quantity_5ef05e4a4b7d1">Xiaomi Mi Mix 2 quantity</label>
                                            <input type="number" id="quantity_5ef05e4a4b7d1" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                                        </div>
                                        <button type="submit" name="add-to-cart" value="1631" class="single_add_to_cart_button button alt">Add to cart</button>
                                    </form>
                                    <div class="product_meta">
                                        <span class="posted_in"><span class="product_meta_title">Danh mục: </span><a href="product-category/cell-phones/" class="cmsmasters_cat_color cmsmasters_cat_27" rel="category tag">Cell Phones</a>, <a href="product-category/cell-phones/xiaomi/" class="cmsmasters_cat_color cmsmasters_cat_51" rel="category tag">Xiaomi</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Heebo:300%2C500" rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>

    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                var slider = document.getElementById(sliderID);
                slider.innerHTML = err;
                slider.style.display = "block";
            }
        }
    </script>
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
    <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
    </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0'?>'></script>
    </script>
    <script type='text/javascript'>
        var yith_wcwl_l10n = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "enable_ajax_loading": "",
            "ajax_loader_url": "https:\/\/devicer.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
            "remove_from_wishlist_after_add_to_cart": "1",
            "is_wishlist_responsive": "1",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
                "load_mobile_action": "load_mobile",
                "delete_item_action": "delete_item",
                "save_title_action": "save_title",
                "save_privacy_action": "save_privacy",
                "load_fragments": "load_fragments"
            }
        };
    </script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl521d.js?ver=3.0.10 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/cmsmasters-mega-menu/js/jquery.megaMenu077c.js?ver=1.2.9 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/contact-form-7/includes/js/scripts38c6.js?ver=5.1.9 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0235.js?ver=4.1.1 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min0235.js?ver=4.1.1 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min0235.js?ver=4.1.1 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/js/yith-autocomplete.min4281.js?ver=1.2.7 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.minc23b.js?ver=2.3.21 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min13ac.js?ver=1.4.21 '?>'></script>
    <script type='text/javascript'>
        var ywpc_footer = {
            "gmt": "0",
            "is_rtl": "",
            "theme": "Devicer"
        };
    </script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/js/ywpc-footer.min7661.js?ver=5.4.2 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min1159.js?ver=1.4.2 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/cmsmasters-hover-slider.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/easing.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/easy-pie-chart.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/mousewheel.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/owlcarousel.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/request-animation-frame.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/scrollspy8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/scroll-to.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/stellar.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/waypoints.min8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript'>
        var cmsmasters_script = {
            "theme_url": "https:\/\/devicer.cmsmasters.net\/wp-content\/themes\/devicer",
            "site_url": "https:\/\/devicer.cmsmasters.net\/",
            "ajaxurl": "https:\/\/devicer.cmsmasters.net\/wp-admin\/admin-ajax.php",
            "nonce_ajax_like": "c1290bb100",
            "nonce_ajax_view": "dfbaad1558",
            "project_puzzle_proportion": "0.7069",
            "gmap_api_key": "AIzaSyBIyWpcN4BzUQduapNmX5kb2DruMvy2KMc",
            "gmap_api_key_notice": "Please add your Google Maps API key",
            "gmap_api_key_notice_link": "read more how",
            "primary_color": "#3452ff",
            "ilightbox_skin": "dark",
            "ilightbox_path": "vertical",
            "ilightbox_infinite": "0",
            "ilightbox_aspect_ratio": "1",
            "ilightbox_mobile_optimizer": "1",
            "ilightbox_max_scale": "1",
            "ilightbox_min_scale": "0.2",
            "ilightbox_inner_toolbar": "0",
            "ilightbox_smart_recognition": "0",
            "ilightbox_fullscreen_one_slide": "0",
            "ilightbox_fullscreen_viewport": "center",
            "ilightbox_controls_toolbar": "1",
            "ilightbox_controls_arrows": "0",
            "ilightbox_controls_fullscreen": "1",
            "ilightbox_controls_thumbnail": "1",
            "ilightbox_controls_keyboard": "1",
            "ilightbox_controls_mousewheel": "1",
            "ilightbox_controls_swipe": "1",
            "ilightbox_controls_slideshow": "0",
            "ilightbox_close_text": "Close",
            "ilightbox_enter_fullscreen_text": "Enter Fullscreen (Shift+Enter)",
            "ilightbox_exit_fullscreen_text": "Exit Fullscreen (Shift+Enter)",
            "ilightbox_slideshow_text": "Slideshow",
            "ilightbox_next_text": "Next",
            "ilightbox_previous_text": "Previous",
            "ilightbox_load_image_error": "An error occurred when trying to load photo.",
            "ilightbox_load_contents_error": "An error occurred when trying to load contents.",
            "ilightbox_missing_plugin_error": "The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."
        };
    </script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/jquery.script8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/theme-framework/theme-style/js/jquery.theme-script8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/jquery.tweet.mine7f0.js?ver=1.3.1 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/js/smooth-sticky.min20b9.js?ver=1.0.2 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-includes/js/comment-reply.min7661.js?ver=5.4.2 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/js/jquery.plugin-script8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/themes/devicer/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-wishlist/js/jquery.plugin-script8a54.js?ver=1.0.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-includes/js/wp-embed.min7661.js?ver=5.4.2 '?>'></script>
    <script type='text/javascript'>
        var yith_wcas_params = {
            "loading": "https:\/\/devicer.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-ajax-search-premium\/assets\/images\/ajax-loader.gif",
            "show_all": "false",
            "price_label": "",
            "show_all_text": "",
            "ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/js/frontend.min5152.js?ver=1.0 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en2aca.js?ver=2.13 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine2aca.js?ver=2.13 '?>'></script>
    <script type='text/javascript'>
        var wysijaAJAX = {
            "action": "wysija_ajax",
            "controller": "subscribers",
            "ajaxurl": "https:\/\/devicer.cmsmasters.net\/wp-admin\/admin-ajax.php",
            "loadingTrans": "Loading...",
            "is_rtl": ""
        };
    </script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/wysija-newsletters/js/front-subscribers2aca.js?ver=2.13 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-includes/js/underscore.min4511.js?ver=1.8.3 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-includes/js/wp-util.min7661.js?ver=5.4.2 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min0235.js?ver=4.1.1 '?>'></script>
    <script type='text/javascript' src='<?=BASE_URL . '/layouts/page/assets/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min0235.js?ver=4.1.1 '?>'></script>
    </body>
</html>
