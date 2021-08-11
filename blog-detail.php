<?php

require_once './autoload/Autoload.php';

$id = Input::get('id');
$sql = "SELECT baiviet.*, danhmuc_blog.tendanhmuc, users.name FROM baiviet JOIN danhmuc_blog ON baiviet.danhmuc_id = danhmuc_blog.id JOIN users on users.id = baiviet.user_id WHERE baiviet.id = $id ";
$new = $DB->queryOne($sql);

if (is_object($new)) {
    $sql = "SELECT * FROM baiviet  ORDER BY id DESC LIMIT 4 ";
    $newRelated = $DB->query($sql);
} else {
    die('không tồn tại bài viết !');
}

$title = "Product Detail";
require_once './layouts/page/header.php';
?>

<!-- Start Middle -->
<div id="middle">
    <div class="middle_inner">
        <div class="content_wrap fullwidth">
            <!-- Start Content -->
            <div class="middle_content entry">
                <div class="blog opened-article">
                    <!-- Start Post Single Article -->
                    <article id="post-2938" class="cmsmasters_open_post post-2938 post type-post status-publish format-image has-post-thumbnail hentry category-hi-tech post_format-post-format-image">
                        <div style="display:flex; justify-content:space-between">
                            <div>
                                <span class="cmsmasters_post_category"><?= $new->tendanhmuc ?></span>
                                <span class="cmsmasters_post_author"><span><?= $new->name ?></span>
                                <div class="cmsmasters_post_cont_info entry-meta">
                                    <span class="cmsmasters_post_date"><?= formatDate($new->created_at) ?></span>
                                </div>
                            </div>
                            <div>
                                <div class="fb-like" data-href="http://jvbvietnam.com/blog-detail.php?id=8" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                            </div>
                        </div>
                        <figure class="cmsmasters_img_wrap">
                            <a href="#" title="Dairy: A free Sketch UI kit for minimal apps" rel="ilightbox[img_2938_5ef2b6e86144c]" class="cmsmasters_img_link">
                                <img width="1160" height="685" src="<?= BASE_URL . '/' . $new->hinhanh ?>" sizes="(max-width: 1160px) 100vw, 1160px" />
                            </a>
                        </figure>
                        <div class="cmsmasters_post_content entry-content">
                            <div>
                                <?= paragraphText($new->noidung) ?>
                            </div>
                        </div>
                        <div style="margin: 30px 0">
                            <div class="fb-comments" data-href="http://jvbvietnam.com/blog-detail.php?id=<?= $id ?>" data-numposts="5" data-width="100%"></div>
                        </div>
                    </article>
                    <aside class="cmsmasters_single_slider">
                        <h3 class="cmsmasters_single_slider_title">Bài viết khác</h3>
                        <div class="cmsmasters_single_slider_inner">
                            <div id="cmsmasters_owl_slider_5ef2b6e862e7e" class="cmsmasters_owl_slider" data-single-item="false" data-auto-play="5000">
                                <?php foreach ($newRelated as $item) : ?>
                                    <div class="cmsmasters_owl_slider_item cmsmasters_single_slider_item">
                                        <div class="cmsmasters_single_slider_item_outer">
                                            <figure class="cmsmasters_img_wrap"><a href="<?= url('blog-detail.php?id=' . $item->id) ?>" title="Best care and support at Our Stores" class="cmsmasters_img_link preloader"><img width="580" height="410" src="<?= BASE_URL . '/' . $item->hinhanh ?>" class="full-width wp-post-image" alt="Best care and support at Our Stores" title="blog5" /></a></figure>
                                            <div class="cmsmasters_single_slider_item_inner">
                                                <h6 class="cmsmasters_single_slider_item_title">
                                                    <a href="<?= url('blog-detail.php?id=' . $item->id) ?>"><?= $item->tieude ?></a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- Finish Content -->
        </div>
    </div>
</div>

<a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top">
    <span></span>
</a>
</div>
<!-- Finish Main -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=543121906576699&autoLogAppEvents=1" nonce="UU6IAsrA"></script>

<?php require_once './layouts/page/footer.php' ?>
