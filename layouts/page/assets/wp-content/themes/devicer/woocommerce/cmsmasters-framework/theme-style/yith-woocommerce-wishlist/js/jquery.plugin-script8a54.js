/**
 * @package 	WordPress
 * @subpackage 	Devicer
 * @version		1.0.0
 * 
 * Yith WooCommerce Wishlist Scripts
 * Created by CMSMasters
 * 
 */


"use strict";

jQuery(document).ready(function () { 
	cmsmasters_ajax_wishlist_add_to_cart();
} );


function cmsmasters_ajax_wishlist_add_to_cart() {
	"use strict";
	
	jQuery('.wishlist_table').on( 'click', '.add_to_cart_button', function() {
		
		var productInfo = jQuery(this).closest('tr'), 
			productAmount = productInfo.find('.product-price > .amount, .product-price > ins > .amount').text(), 
			addedToCart = productInfo.find('.added_to_cart'), 
			product = {};
		
		
		product.name = productInfo.find('.product-name a').text();
		
		product.price = productAmount.replace(cmsmasters_woo_script.currency_symbol, '');
		
		product.image = productInfo.find('.product-thumbnail img');
		
		
		addedToCart.addClass('cmsmasters_to_show');
		
		
		if (product.image.length) {
			/* Dynamic Cart Update Img Src */
			var str = product.image.get(0).src, 
				ext = /(\..{3,4})$/i.exec(str), 
				extLength = ext[1].length, 
				url = str.slice(0, -extLength), 
				newURL = /(-\d{2,}x\d{2,})$/i.exec(url), 
				newSize = '-' + cmsmasters_woo_script.thumbnail_image_width + 'x' + cmsmasters_woo_script.thumbnail_image_height, 
				buildURL = '';
			
			
			if (newURL !== null) {
				buildURL += url.slice(0, -newURL[1].length) + newSize + ext[1];
			} else {
				buildURL += url + newSize + ext[1];
			}
			
			
			product.image = '<img class="cmsmasters_added_product_info_img" src="' + buildURL + '" />';
		}
		
		
		cmsmasters_added_product = product;
	} );
}
