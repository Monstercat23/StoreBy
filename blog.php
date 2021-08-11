<?php
require_once './autoload/Autoload.php';

$title = "Tin tức";

$sql = "SELECT baiviet.*, users.name, danhmuc_blog.tendanhmuc FROM  baiviet JOIN users ON baiviet.user_id = users.id JOIN danhmuc_blog ON baiviet.danhmuc_id = danhmuc_blog.id ORDER BY baiviet.id DESC";
$posts =  $DB->query($sql);

$sql="SELECT * FROM danhmuc_blog";
$categoriesBlog = $DB->query($sql);

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
                <div id="cmsmasters_row_a0e7e99483" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="blog_49ae717791" class="cmsmasters_wrap_blog entry-summary" data-layout="standard" data-layout-mode="" data-url="https://devicer.cmsmasters.net/wp-content/plugins/cmsmasters-content-composer/" data-orderby="date" data-order="ASC" data-count="3" data-categories="business,hi-tech,trends" data-metadata="date,categories,author,comments,likes,more" data-pagination="more">
                                                <div class="blog standard">
                                                    <?php if (is_array($posts)) : ?>
                                                        <?php foreach ($posts as $post) : ?>
                                                            <article id="post-85" class="cmsmasters_post_default post-85 post type-post status-publish format-image has-post-thumbnail hentry category-hi-tech post_format-post-format-image">
                                                                <div class="cmsmasters_post_cont_wrap">
                                                                    <img width="860" height="508" src="./wp-content/uploads/2017/06/blog5-2-860x508.jpg" class="" alt="Best care and support at Our Stores" title="blog5" srcset=" <?= BASE_URL . '/' . $post->hinhanh ?> " sizes="(max-width: 860px) 100vw, 860px" />
                                                                    <div class="cmsmasters_post_cont enable_image">
                                                                        <footer class="cmsmasters_post_footer entry-meta">
                                                                            <span class="cmsmasters_post_category">
                                                                                <a href="#" class="cmsmasters_cat_color cmsmasters_cat_17" rel="category tag"><?=$post->tendanhmuc?></a>
                                                                            </span>
                                                                            <span class="cmsmasters_post_author">
                                                                                <a href="#" title="Posts by ..." class="vcard author" rel="author">
                                                                                    <span class="fn"><?= $post->name ?></span></a>
                                                                                </span>
                                                                            <div>
                                                                                <div class="fb-like" data-href="http://jvbvietnam.com/blog-detail.php?id=<?= $post->id ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                                                                            </div>
                                                                        </footer>
                                                                        <header class="cmsmasters_post_header entry-header">
                                                                            <h3 class="cmsmasters_post_title entry-title"><a href="blog-detail.php?id=<?= $post->id ?>"><?= $post->tieude ?></a></h3>
                                                                        </header>
                                                                        <div class="cmsmasters_post_cont_info entry-meta"><span class="cmsmasters_post_date"><?= formatDate($post->created_at) ?></span></div>
                                                                        <div class="cmsmasters_post_content entry-content">
                                                                            <p><?= $post->doantrich ?></p>
                                                                        </div>
                                                                        <a class="cmsmasters_post_read_more" href="blog-detail.php?id=<?= $post->id ?>">Chi tiết</a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        <?php endforeach ?>
                                                    <?php endif ?>

                                                </div>
                                                <div class="cmsmasters_wrap_more_posts cmsmasters_wrap_more_items">
                                                    <div class="cmsmasters_wrap_post_loader cmsmasters_wrap_items_loader">
                                                        <a href="javascript:void(0)" class="cmsmasters_button cmsmasters_post_loader cmsmasters_items_loader">
                                                            <span>Tải thêm bài viết</span>
                                                        </a>
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

                <div class="cl"></div>
            </div>
            <!-- Finish Content -->


            <!-- Start Sidebar -->
            <div class="sidebar">
                <aside id="categories-2" class="widget widget_categories">
                    <h3 class="widgettitle">Danh mục</h3>
                    <ul>
                        <?php foreach ($categoriesBlog as $item) :?>
                            <li class="cat-item cat-item-16">
                                <a href="#"><?= $item->tendanhmuc?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </aside>

                <aside id="custom-posts-tabs-2" class="widget widget_custom_posts_tabs_entries">
                    <?php foreach ($categoriesBlog as $item) :?>
                        <?php
                            $id_danhmuc = $item->id;
                            $sql = "SELECT * FROM baiviet WHERE danhmuc_id = $id_danhmuc";
                            $listPost = $DB->query($sql);
                        ?>
                        <h3 class="widgettitle"><?= $item->tendanhmuc?></h3>
                        <div class="cmsmasters_tabs tabs_mode_tab lpr">
                            <div class="cmsmasters_tabs_wrap">
                                <!-- Bài Viết Gần Nhất -->
                                <div class="cmsmasters_tab tab_latest">
                                    <ul>
                                        <?php foreach ($listPost as $post) :?>
                                            <li>
                                                <div class="cmsmasters_lpr_tabs_img">
                                                    <figure class="cmsmasters_img_wrap">
                                                        <a href="#" title="<?= $post->tieude ?>" class="cmsmasters_img_link">
                                                            <img width="75" height="75" src="<?= $post->hinhanh ?>" class=" wp-post-image" alt="Photo" title="blog3" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog3-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" />
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="cmsmasters_lpr_tabs_cont">
                                                    <a href="#" title="<?= $post->tieude ?>">
                                                        <?= $post->tieude ?>
                                                    </a>
                                                    <abbr class="published" title="<?= $post->created_at ?>"><?= $post->created_at ?></abbr>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                <!-- Bài Viết Nổi Bật -->
                                <!-- <div class="cmsmasters_tab tab_popular">
                                    <ul>
                                        <li>
                                            <div class="cmsmasters_lpr_tabs_img">
                                                <figure class="cmsmasters_img_wrap"><a href="./2017/01/10/best-care-and-support-at-our-stores/index.html" title="Best care and support at Our Stores" class="cmsmasters_img_link"><img width="75" height="75" src="./wp-content/uploads/2017/06/blog5-2-75x75.jpg" class=" wp-post-image" alt="Best care and support at Our Stores" title="blog5" srcset="https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-75x75.jpg 75w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-150x150.jpg 150w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-300x300.jpg 300w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-540x540.jpg 540w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-100x100.jpg 100w, https://devicer.cmsmasters.net/wp-content/uploads/2017/06/blog5-2-600x600.jpg 600w" sizes="(max-width: 75px) 100vw, 75px" /></a></figure>
                                            </div>
                                            <div class="cmsmasters_lpr_tabs_cont"><a href="./2017/01/10/best-care-and-support-at-our-stores/index.html" title="Best care and support at Our Stores">Best care and support at Our Stores</a><abbr class="published" title="January 10, 2017">January 10, 2017</abbr></div>
                                        </li>
                                    </ul>
                                </div> -->
                                <!-- Bình Luận -->
                                <!-- <div class="cmsmasters_tab tab_comments">
                                    <ul>
                                        <li>cmsmasters <span class="color_2">on</span> <a href="./2017/01/27/dairy-a-free-sketch-ui-kit-for-minimal-apps/index.html#comments" rel="bookmark">Dairy: A free Sketch UI kit for minimal apps</a><small><abbr class="published" title="15-04-2015">3 years ago</abbr></small>
                                            <p>Aenean semper varius pellentesque</p>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                    </div>
                    <?php endforeach ?>
                </aside>
            </div>
            <!-- Finish Sidebar -->
        </div>
    </div>
</div>
<!-- Finish Middle -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=543121906576699&autoLogAppEvents=1" nonce="UU6IAsrA"></script>
<?php require_once './layouts/page/footer.php' ?>
