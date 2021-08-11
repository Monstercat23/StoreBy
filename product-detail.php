<?php
require_once './autoload/Autoload.php';

$id = Input::get('id');
$sql = "SELECT sanpham.*, danhmuc.tendanhmuc FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE sanpham.id = $id";
$product = $DB->queryOne($sql);

if (is_object($product)) {
    $sql = "SELECT COUNT(sanpham.id) as countReview FROM sanpham join danhgia_sanpham on sanpham.id = danhgia_sanpham.sanpham_id WHERE sanpham.id = $id";
    $countReview = $DB->queryOne($sql);

    $sql = "SELECT * FROM danhgia_sanpham join khachhang on khachhang.id = danhgia_sanpham.khachhang_id WHERE danhgia_sanpham.sanpham_id = $id";
    $reviews = $DB->query($sql);

    $sql = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.danhmuc_id = danhmuc.id WHERE danhmuc.id = $product->danhmuc_id and sanpham.id != $id ORDER BY sanpham.id DESC LIMIT 4 ";
    $productRelated = $DB->query($sql);

    $sql = "SELECT * FROM anhsanpham WHERE sanpham_id = $id ORDER BY id ASC";
    $imagesProduct = $DB->query($sql);

} else {
    die('product not found !');
}

$title = "Chi tiết sản phẩm";
require_once './layouts/page/header.php';
?>
<!-- Start Middle -->

<div id="middle">
	<div class="middle_inner">
		<div class="content_wrap fullwidth">
			<!-- Start Content -->
			<div class="middle_content entry" style="padding-top:0">
				<div class="woocommerce-notices-wrapper"></div>
				<div itemscope itemtype="http://schema.org/Product" id="product-13161" class="product type-product post-13161 status-publish first instock product_cat-apple-ipads product_cat-tablets has-post-thumbnail shipping-taxable purchasable product-type-simple">
					<div class="cmsmasters_single_product">
						<div class="cmsmasters_breadcrumbs">
							<div class="cmsmasters_breadcrumbs_aligner"></div>
							<div class="cmsmasters_breadcrumbs_inner">
								<nav class="woocommerce-breadcrumb">
									<a href="#">
										<?= $product->tendanhmuc ?>
									</a>
								</nav>
							</div>
                        </div>

						<div class="cmsmasters_product_left_column">
							<div class="images">
								<img width="600" height="600" class="attachment-shop_single size-shop_single wp-post-image" alt="" srcset="<?= url('/' . $product->hinhanh) ?>" sizes="(max-width: 600px) 100vw, 600px" />
                            </div>

							<script type="text/javascript" charset="utf-8">
								var yith_magnifier_options = {
									enableSlider: true,
									sliderOptions: {
										responsive: false,
										circular: true,
										infinite: true,
										direction: 'left',
										debug: false,
										auto: false,
										align: 'left',
										prev: {
											button: "#slider-prev",
											key: "left"
										},
										next: {
											button: "#slider-next",
											key: "right"
										},
										//width   : 618,
										scroll: {
											items: 1,
											pauseOnHover: true
										},
										items: {
											//width: 104,
											visible: 6
										}
									},
									showTitle: false,
									zoomWidth: 'auto',
									zoomHeight: 'auto',
									position: 'right',
									//tint: ,
									//tintOpacity: ,
									lensOpacity: 0.5,
									softFocus: false,
									//smoothMove: ,
									adjustY: 0,
									disableRightClick: false,
									phoneBehavior: 'inside',
									loadingLabel: 'Loading...',
									zoom_wrap_additional_css: ''
								};
                            </script>

						</div>
						<div class="summary entry-summary cmsmasters_product_right_column">
							<div class="cmsmasters_product_title_wrap">
								<h1 class="product_title entry-title"><?= $product->tensanpham ?></h1>
							</div>
							<div class="cmsmasters_product_info_wrap">

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
											<?php for ($i = 1; $i <= $product->danhgia; $i++) : ?>
												<span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
											<?php endfor ?>
										</div>
									</div>
									<span class="rating dn">
                                        <strong itemprop="ratingValue"><?= $product->danhgia ?></strong> out of 5</span>
								</div>
								<span class="woocommerce-Price-amount amount"><span>
                                <span class="woocommerce-Price-currencySymbol">
                                    <?= number_format($product->giaban) . ' vnđ' ?>
                                </span>
							</div>
							<form class="cart" action="<?= url('add-cart.php') ?>" method="get">
								<div class="quantity">
									<label class="screen-reader-text" for="quantity_5ee8610905008">Apple 9.7&quot; iPad quantity</label>
									<input type="number" id="quantity_5ee8610905008" class="input-text qty text" step="1" min="1" max="" name="so_luong" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" />
									<input type="hidden" name="id" value="<?= $id ?>">
								</div>
								<button class="single_add_to_cart_button button alt" type="submit">Thêm vào giỏ</button>
							</form>
							<div class="product_meta">
								<span class="posted_in"><span class="product_meta_title">Loại sản phẩm:
									</span><a href="#"><?= $product->tendanhmuc ?></a>
							</div>
						</div>
					</div>
					<div class="cmsmasters_tabs tabs_mode_tab cmsmasters_woo_tabs">
						<ul class="cmsmasters_tabs_list">
							<li class="description_tab cmsmasters_tabs_list_item">
								<a href="#tab-description">
									<span>Mô tả</span>
								</a>
							</li>
							<li class="reviews_tab cmsmasters_tabs_list_item">
								<a href="#tab-reviews">
									<span>Đánh giá (<?= $countReview->countReview ?>)</span>
								</a>
							</li>
						</ul>
						<div class="cmsmasters_tabs_wrap">
							<div class="entry-content cmsmasters_tab" id="tab-description">
								<div class="cmsmasters_tab_inner">
									<h2>Mô tả</h2>
									<div id="cmsmasters_row_34c7175e4b" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
										<div class="cmsmasters_row_outer_parent">
											<div class="cmsmasters_row_outer">
												<div class="cmsmasters_row_inner">
													<div class="cmsmasters_row_margin">
														<div id="cmsmasters_column_" class="cmsmasters_column one_first">
															<div class="cmsmasters_column_inner">
																<div class="cmsmasters_text">
																	<?= paragraphText($product->mota) ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="container mt-3">
                                        <h3>Ảnh Sản Phẩm</h3>
                                        <div class="row">
                                            <?php if (is_array($imagesProduct)) : ?>
                                                <?php foreach ($imagesProduct as $image) :?>
                                                        <img class="p-3" width="20%" src="<?= $image->url ?>"/>
                                                <? endforeach ?>
                                            <? endif ?>
                                        </div>
                                    </div>
								</div>
                            </div>

							<div class="entry-content cmsmasters_tab" id="tab-reviews">
								<div class="cmsmasters_tab_inner">
									<div id="reviews">
										<?php if (is_array($reviews)) : ?>
											<?php foreach ($reviews as $review) : ?>
												<div id="comments" class="post_comments cmsmasters_woo_comments">
													<h2 class="post_comments_title">
														<ol class="commentlist">
															<li itemprop="review" itemscope itemtype="//schema.org/Review" class="review byuser comment-author-cmsmasters bypostauthor even thread-even depth-1" id="li-comment-38">
																<div id="comment-38" class="comment_container cmsmasters_comment_item">
																	<figure class="cmsmasters_comment_item_avatar">
																		<img alt='' src='<?= url('public/uploads/images/' . $review->avatar) ?>' class='avatar avatar-70 photo' height='70' width='70' /> </figure>
																	<div class="comment-text cmsmasters_comment_item_cont">
																		<div class="cmsmasters_comment_item_cont_info">
																			<h4 class="cmsmasters_comment_item_title" itemprop="author"><?= $review->hoten ?></h4>
																			<div class="cmsmasters_star_rating" itemscope itemtype="//schema.org/Rating" title="Rated 4 out of 5">
																				<div class="cmsmasters_star_trans_wrap">
																					<span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																					<span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																					<span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																					<span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																					<span class="cmsmasters_theme_icon_star_empty cmsmasters_star"></span>
																				</div>
																				<div class="cmsmasters_star_color_wrap" data-width="width:80%">
																					<div class="cmsmasters_star_color_inner">
																						<?php for ($i = 1; $i <= $review->danhgia; $i++) : ?>
																							<span class="cmsmasters_theme_icon_star_full cmsmasters_star"></span>
																						<?php endfor ?>
																					</div>
																				</div>
																				<span class="rating dn"><strong itemprop="ratingValue"><?= $item->danhgia ?></strong>
																					out of 5</span>
																			</div>
																		</div>
																		<time class="cmsmasters_comment_item_date" itemprop="datePublished">
																			<?= formatDate($review->created_at) ?></time>
																		<div itemprop="description" class="description cmsmasters_comment_item_content">
																			<p><?= $review->noidung ?></p>
																		</div>
																	</div>
																</div>
															</li>
														</ol>
												</div>
											<?php endforeach ?>
										<?php endif ?>
										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond">
													<h3 id="reply-title" class="comment-reply-title">Add a review
                                                        <small>
                                                            <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                                        </small>
                                                    </h3>
													<form action="" method="post" id="commentform" class="comment-form" novalidate>
														<p class="comment-form-rating"><label for="rating">Your Rating</label><select name="rating" id="rating" required>
																<option value="">Rate&hellip;</option>
																<option value="5">Perfect</option>
																<option value="4">Good</option>
																<option value="3">Average</option>
																<option value="2">Not that bad</option>
																<option value="1">Very Poor</option>
															</select></p>
														<p class="comment-form-comment">
                                                            <textarea id="comment" name="comment" cols="67" rows="2" placeholder="Your Review" required></textarea>
                                                        </p>
														<p class="comment-form-author">
															<input id="author" name="author" type="text" value="" size="35" placeholder="Name *" required />
														</p>
													</form>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<section class="related products">
						<h2>Sản phẩm tương tự</h2>
						<ul class="products columns-4 cmsmasters_products">
							<?php if (is_array($productRelated)) : ?>
								<?php foreach ($productRelated as $item) : ?>
									<li class="product type-product post-13156 status-publish first instock product_cat-apple-ipads-mini product_cat-tablets has-post-thumbnail shipping-taxable purchasable product-type-simple">
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
                                                                <strong itemprop="ratingValue">5.00</strong> out of 5
                                                            </span>
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
							<?php endif ?>
						</ul>
					</section>
				</div>
			</div>
			<!-- Finish Content -->
		</div>
	</div>
</div>
<!-- Finish Middle -->

<!-- Finish Bottom -->
<a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top">
    <span></span>
</a>
</div>
<!-- Finish Main -->

<?php require_once './layouts/page/footer.php'; ?>
