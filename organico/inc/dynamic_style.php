<?php 
global $smof_data;
if( !isset($data) ){
	$data = $smof_data;
}

$data = ftc_array_atts(
			array(
				/* FONTS */
				'ftc_body_font_enable_google_font'					=> 1
				,'ftc_body_font_family'								=> "Arial"
				,'ftc_body_font_google'								=> "Roboto Slab"
				
				,'ftc_secondary_body_font_enable_google_font'		=> 1
				,'ftc_secondary_body_font_family'					=> "Arial"
				,'ftc_secondary_body_font_google'					=> "Roboto"
				
				/* COLORS */
				,'ftc_primary_color'									=> "#82b53f"

				,'ftc_secondary_color'								=> "#333"			
                ,'ftc_body_background_color'								=> "#ffffff"
				/* RESPONSIVE */
				,'ftc_responsive'									=> 1
				,'ftc_layout_fullwidth'								=> 0
				,'ftc_enable_rtl'									=> 0
				
				/* FONT SIZE */
				/* Body */
				,'ftc_font_size_body'								=> 14
				,'ftc_line_height_body'								=> 22
				
				/* Custom CSS */
				,'ftc_custom_css_code'								=> ''
		), $data);		
		
$data = apply_filters('ftc_custom_style_data', $data);

extract( $data );

/* font-body */
if( $data['ftc_body_font_enable_google_font'] ){
	$ftc_body_font				= $data['ftc_body_font_google']['font-family'];
}
else{
	$ftc_body_font				= $data['ftc_body_font_family'];
}

if( $data['ftc_secondary_body_font_enable_google_font'] ){
	$ftc_secondary_body_font		= $data['ftc_secondary_body_font_google']['font-family'];
}
else{
	$ftc_secondary_body_font		= $data['ftc_secondary_body_font_family'];
}

?>	
	
	/*
	1. FONT FAMILY
	2. GENERAL COLORS
	*/
	
	
	/* ============= 1. FONT FAMILY ============== */

    body{
        line-height: <?php echo esc_html($ftc_line_height_body)."px"?>;
    }
	
        html, 
	body,.widget-title.heading-title,
        .widget-title.product_title,.newletter_sub_input .button.button-secondary,
        #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
    .ftc-sb-account .ftc_login > a,
    .ftc-sb-account,
    .ftc-my-wishlist *,.item-description .product_title,
        .woocommerce div.product .product_title, 
         .item-description .price, .blogs article h3.product_title, .list-posts .post-info .entry-title
	, .ftc-enable-ajax-search div.meta,
        .woocommerce .products.list .product .price .amount,
        .woocommerce-page .products.list .product .price .amount, 
        .woocommerce .products.list .product h3.product-name > a,h2.widgettitle,
		.woocommerce.widget_shopping_cart .total,
		p.woocommerce-mini-cart__buttons.buttons > a.button.wc-forward,
		.single-post article .post-info .info-category h3.product_title,
		.ftc-featuring-product-h2.ftc-text-h7 p.after-title, .top_footer8 p.button-sub input[type="submit"],
		.feature-top10 .ftc-feature .ftc_feature_content h3 a,
		span.text-header8,.single-portfolio .meta-content .portfolio-info p,
		.product-deal-h11 .product .item-description .meta_info .add-to-cart a,
		.product-deal-h11 div.product .countdown-meta, .product-deal-h11 .counter-wrapper > div span.number,
		.test-home11.ftc-sb-testimonial .testimonial-content .byline, .blog-home11 article a.button-readmore,
		.group-img-h12 .text1-h12 a, .single-img12_2 .text1-h12 a,
		.products .product h3,
    	.woocommerce .products .product h3,
    	.woocommerce-page .products .product h3,
    	.ftc-meta-widget h3,.woocommerce div.product .summary.entry-summary span.amount,
		.single-product .woocommerce ul.product_list_widget li .ftc-meta-widget.item-description h3.product-name,
		body.blog article .post-info .entry-title, .archive.category article .post-info .entry-title, .blog article .post-info .entry-title, 
		.author article .post-info .entry-title, .tag article .post-info .entry-title, 
		.single-post article .post-info .entry-title,.single-post #comments h2.comments-title,.text-left-h14 a,
		.ftc-footer .footer-middle14 .ftc-title h2, .header-layout15 .cart-total, .text-left-h15 a,
.footer-middle15  p.button-sub input[type="submit"], .footer-middle16 h3, .footer-middle16 p.button-sub input[type="submit"],
.header-layout17 .cart-total ,.top-middle-h17 h3, .top-middle-h17 p.button-sub input[type="submit"]	, 
.mobile-wishlist .tini-wishlist, .newsletter-h18 p.button-sub input[type="submit"], .newsletter-h19 .ftc-text-h12 .ftc-title h2,
.newsletter-h23 p.button-sub input[type="submit"], .ftc-footer .ftc-title h2, .pp_woocommerce div.product p.price,
.error_2 p.button-error, .error_4 p.button-error, .mail-coming2 p.button-sub, .mail-coming5 p.button-sub,
.single-contact2 .wpcf7 input[type^="submit"],.contact-us3 .wpcf7 input[type^="submit"], .faq_3 .wpcf7 input[type^="submit"],
body .ftc_desciption_tab a, .ftc_excerpt .full-content p.link-more,
.ftc-sidebar .widget-container ul.product-categories ul.children li a	{
		font-family: <?php echo esc_html($ftc_body_font) ?>;
	}
.widget-title.heading-title,
.widget-title.product_title,.newletter_sub_input .button.button-secondary,
#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
.single-product .widget_recently_viewed_products .ftc-meta-widget span,
.single-product .widget_recently_viewed_products .ftc-meta-widget a
, .berocket_aapf_widget-title span
	{
		font-family: <?php echo esc_html($ftc_body_font) ?> !important;
	}
	#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > ul.mega_dropdown,
        #mega_main_menu li.multicolumn_dropdown > .mega_dropdown > li .mega_dropdown > li,
        #mega_main_menu.primary ul li .mega_dropdown > li > .item_link .link_text,
        .info-open,
        .info-phone,
        .dropdown-button span > span,
        body p,
        .wishlist-empty,
        div.product .social-sharing li a,
        .ftc-search form,
        .ftc-shop-cart,
        .conditions-box,
        .testimonial-content .info,
        .testimonial-content .byline,
        .widget-container ul.product-categories ul.children li a,
        .widget-container:not(.ftc-product-categories-widget):not(.widget_product_categories):not(.ftc-items-widget) :not(.widget-title),
        .ftc-products-category ul.tabs li span.title,
        .woocommerce-pagination,
        .woocommerce-result-count,
        .woocommerce-page .products.list .product h3.product-name > a
        .products.list .short-description.list,
        div.product .single_variation_wrap .amount,
        div.product div[itemprop="offers"] .price .amount,
        .orderby-title,
        .blogs .post-info,
        .blog .entry-info .entry-summary .short-content,
        .single-post .entry-info .entry-summary .short-content,
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category,
        #comments .comments-title,
        #comments .comment-metadata a,
        .post-navigation .nav-previous,
        .post-navigation .nav-next,
        .woocommerce-review-link,
        .ftc_feature_info,
        .woocommerce div.product p.stock,
        .woocommerce div.product .summary div[itemprop="description"],
        .woocommerce div.product p.price,
        .woocommerce div.product .woocommerce-tabs .panel,
        .woocommerce div.product form.cart .group_table td.label,
        .woocommerce div.product form.cart .group_table td.price,
        footer,
        footer a,
        .blogs article .image-eff:before,
        .blogs article a.gallery .owl-item:after,.prod-cat-show-top-content-button a,
		.header-layout7 .header-nav, 
		.header-layout7 .header-nav .ftc-sb-account .ftc_login > a, 
		.header-layout7 .header-nav .header-layout7 .ftc-sb-account, .ftc-my-wishlist *,
		.ftc-slider .product-categories a ,.product-deal-home8 .woocommerce .ftc-product-time-deal .product .item-description,
		.product-deal-home8 .header-title,.ftc-footer .copy-com, .header-layout8 #mega_main_menu.vertical > .menu_holder > .menu_inner > ul > li,
		.header-layout8 .header-nav, .header-layout8 .ftc-sb-account .ftc_login > a,
		.text-home9 h3, .product-deal-h9.ftc-product-time-deal .product .item-description,
		.product-deal-h9.ftc-product-time-deal h3.product_title.product-name a,
		.product-deal-h9 .products .product .price,.title-home9  h3.product_title.product-name a,
		.slider-home9 .product .item-description .meta_info .add-to-cart span.ftc-tooltip.button-tooltip ,
		.slider-home9 .product .item-description .meta_info .add-to-cart a,
		.wpb-js-composer .slider-home9 .vc_tta-container .vc_tta.vc_general .vc_tta-tabs-list,
		.blog-home9 .blogs article h3.product_title a,.text-title-h11 h3,
		.product-deal-h11.ftc-product-time-deal div.product span.price,
		.widget-h11 .ftc-meta-widget h3,.widget-h11 .ftc-meta-widget.item-description,
		.header-layout12 .header-nav, .fresh-look h3.mont, .fresh-look .ftc-sb-button a.ftc-button,
		body.blog article .post-info,.archive.category article .post-info, .author article .post-info, 
		.tag article .post-info,.single-post article .post-info .tags-link, .single-post .vcard.author,
		.single-post .text-social-share, #comments .the-comment.media span.reply-comment,
		.blog blockquote.blockquote-bg,.archive.author blockquote.blockquote-bg,
.archive.tag blockquote.blockquote-bg,
.archive.category blockquote.blockquote-bg,.blog-timeline .date-timeline,
.blog-timeline .load-more-wrapper,.quote blockquote.blockquote-bg,.single-post blockquote.blockquote-bg,
.deal-h14.ftc-product-time-deal .short-description, .header-layout15 span.text-header8,
body.wpb-js-composer .product-home16 .vc_general.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tab a, .blog-home17 .blogs article .post-img .date-time,
.header-layout18 .header-nav, .text-button-h18 h3, .header-layout19 .language-currency, .header-layout20 .language-currency,
.header-layout22 .search-button:after , .header-layout23 .search-button:after ,
.header-layout23 #mega_main_menu.vertical > .menu_holder > .menu_inner > ul > li, .revslider-product23 .counter-wrapper,
body.wpb-js-composer .slider-home23 .vc_general.vc_tta-tabs .vc_tta-tab > a, .slider-product-21 .product .item-image span.ftc-tooltip.button-tooltip
, .single-about4 .ftc-sb-button a, .count-coming2 .countdown-meta, .service_part .group-1 h5, .service_part ul,
.feature-service5 .ftc-feature .ftc_feature_content h3, .collapsed-content
	{
		font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
	}
	body,
        .site-footer,
        .woocommerce div.product form.cart .group_table td.label,
        .woocommerce .product .conditions-box span,
         .item-description .meta_info .yith-wcwl-add-to-wishlist a,  .item-description .meta_info .compare,
        .social-icons .ftc-tooltip:before,
        .tagcloud a,
        .details_thumbnails .owl-nav > div:before,
        div.product .summary .yith-wcwl-add-to-wishlist a:before,
        .pp_woocommerce div.product .summary .compare:before,
        .woocommerce div.product .summary .compare:before,
        .woocommerce-page div.product .summary .compare:before,
        .woocommerce #content div.product .summary .compare:before,
        .woocommerce-page #content div.product .summary .compare:before,
        .woocommerce div.product form.cart .variations label,
        .woocommerce-page div.product form.cart .variations label,
        .pp_woocommerce div.product form.cart .variations label,
        blockquote,
        .ftc-number h3.ftc_number_meta,
        .woocommerce .widget_price_filter .price_slider_amount,
        .wishlist-empty,
        .woocommerce div.product form.cart .button,
        .woocommerce table.wishlist_table
        {
                font-size: <?php echo esc_html($ftc_font_size_body) ?>px;
        }
	/* ========== 2. GENERAL COLORS ========== */
        /* ========== Primary color ========== */
	.header-currency:hover .ftc-currency > a,
        .ftc-sb-language:hover li .ftc_lang,
        .woocommerce a.remove:hover,
        .dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .ftc-my-wishlist a:hover,
        .ftc-sb-account .ftc_login > a:hover,
        .header-currency .ftc-currency ul li:hover,
        .dropdown-button span:hover,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
        #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li > .item_link:hover *,
        #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
        #mega_main_menu.primary .mega_dropdown > li > .item_link:hover *,
        #mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
        .woocommerce .products .product .price,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce .products .star-rating,
        .woocommerce-page .products .star-rating,
        .star-rating:before,
        div.product div[itemprop="offers"] .price .amount,
        div.product .single_variation_wrap .amount,
        .pp_woocommerce .star-rating:before,
        .woocommerce .star-rating:before,
        .woocommerce-page .star-rating:before,
        .woocommerce-product-rating .star-rating span,
        ins .amount,
        .ftc-meta-widget .price ins,
        .ftc-meta-widget .star-rating,
        .ul-style.circle li:before,
        .woocommerce form .form-row .required,
        .blogs .comment-count i,
        .blog .comment-count i,
        .single-post .comment-count i,
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category .cat-links a,
        .single-post article .post-info .info-category .vcard.author a:hover,
        .ftc-breadcrumb-title .ftc-breadcrumbs-content,
        .ftc-breadcrumb-title .ftc-breadcrumbs-content span.current,
        .ftc-breadcrumb-title .ftc-breadcrumbs-content a:hover,
        .grid_list_nav a.active,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
        .comment-reply-link .icon,
        body table.compare-list tr.remove td > a .remove:hover:before,
        a:hover,
        a:focus,
        .vc_toggle_title h4:hover,
        .vc_toggle_title h4:before,
        .blogs article h3.product_title a:hover,
        article .post-info a:hover,
        article .comment-content a:hover,
        .main-navigation li li.focus > a,
	.main-navigation li li:focus > a,
	.main-navigation li li:hover > a,
	.main-navigation li li a:hover,
	.main-navigation li li a:focus,
	.main-navigation li li.current_page_item a:hover,
	.main-navigation li li.current-menu-item a:hover,
	.main-navigation li li.current_page_item a:focus,
	.main-navigation li li.current-menu-item a:focus,.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a, article .post-info .cat-links a,article .post-info .tags-link a,
    .vcard.author a,article .entry-header .caftc-link .cat-links a,.woocommerce-page .products.list .product h3.product-name a:hover,
    .woocommerce .products.list .product h3.product-name a:hover, 
        .woocommerce .products .star-rating.no-rating,.ftc_search_ajax .search-button:hover,
		.tparrows:hover:before,.owl-nav > div:hover:before, #mega_main_menu.primary .mega_dropdown > li > .item_link:focus *
		, .ftc-products-category ul.tabs li.current span.title, .ftc-products-category ul.tabs li:hover span.title
		, footer ul.bullet li a:before,.widget-container ul.product-categories li a:hover,
		.widget-container ul.product-categories ul.children li a:hover, .widget-container.ftc-product-categories-widget:not(:first-child) ul.product-categories li a:hover
		,.woocommerce-page .products .star-rating.no-rating, div.product .summary .yith-wcwl-add-to-wishlist a:hover, div.product .summary .yith-wcwl-wishlistaddedbrowse a, div.product .summary .yith-wcwl-wishlistexistsbrowse a,
		.single-product  .widget-title-wrapper:before, .comment-meta a:hover,
		#right-sidebar .ftc-meta-widget a:hover, h3.product-name > a:hover,.ftc-sb-testimonial .testimonial-content .name a:hover,
		.woocommerce-info::before, #right-sidebar .widget-container ul > li a:hover, #to-top a, .tp-bullets .tp-bullet:after, .dropdown-container .ftc_cart_check > a.button.view-cart:hover, #mega_main_menu.primary .mega_dropdown > li > .item_link:focus * , ul li a:hover , h3.feature-title.product_title.entry-title a:hover,
        .footer-mobile i, .cart_list li span.quantity span,
        .footer-cart-number:hover,
                .count-wish:hover, .newsletterpopup .close-popup:hover:after,
				.product-filter-by-color ul li a:hover, a.ftc-cart-tini.cart-item-canvas:hover:before,
				a.ftc-cart-tini:hover:before, p.woocommerce-mini-cart__buttons.buttons > a.button.wc-forward:hover,
				.ftc-enable-ajax-search .meta .price,#dokan-seller-listing-wrap ul.dokan-seller-wrap li .store-content .store-info .store-data h2 a:hover,
				.dokan-single-store .profile-frame .profile-info-box .profile-info-summery-wrapper .profile-info-summery .profile-info .dokan-store-info .dokan-store-email a:hover,
				.woocommerce .product .images .ftc-product-video-button:hover,
				.woocommerce-message::before, .widget_categories li:hover,span.author:hover i,
				.widget_shopping_cart .total .amount,.ftc_blog_widget .post_list_widget .post-title:hover,
				.info_column.email a:hover, .test-home5.ftc-sb-testimonial .active .testimonial-content .info:before,
				.ftc-footer .footer-middle5 a:hover,#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
.header-layout7 .cart-total, .banner1-home7 .text-home6 h2,.text-img-home7 h6 a:hover,
.header-layout7 .header-nav .ftc-sb-language li a:hover,.eror-search span.error,
.product-deal-home8.ftc-product-time-deal .star-rating.no-rating:before, .product-deal-home8.ftc-product-time-deal h3.product_title.product-name a:hover,
.product-deal-home8.ftc-slider .product-categories a:hover, .footer-middle8  span.info,
.widget .footer-middle8 ul.info-company li a:hover, footer .footer-middle8 ul.bullet li a:hover,
.ftc-footer .copy-com.copy-com8 a, footer .footer-middle8 .menu-footer a:hover,
#mega_main_menu.vertical.direction-vertical > .menu_holder > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text, 
#mega_main_menu.vertical.direction-vertical > .menu_holder > .menu_inner > ul > li:hover:before, 
#mega_main_menu.vertical > .menu_holder > .menu_inner > ul > li.menu-item-has-children:hover:after,
#mega_main_menu.vertical > .menu_holder > .menu_inner > ul > li:before,
#mega_main_menu.vertical .mega_dropdown > li.current-menu-item > .item_link *, #mega_main_menu.vertical .mega_dropdown > li > .item_link:focus *,
 #mega_main_menu.vertical .mega_dropdown > li > .item_link:hover *, 
#mega_main_menu.vertical li.post_type_dropdown > .mega_dropdown > li > .processed_image:hover > .cover > a > i,
.header-layout8 .header-nav a:hover, .text-home9 a:hover, .product-deal-h9 .counter-wrapper > div.days:before,
.blog-home9 span.count-view:before,.feature-h9 .ftc-feature .fa, footer .footer-middle5.footer-middle9 ul.bullet li a:hover:before ,
.testimonial-h10.ftc-sb-testimonial .owl-nav > div:hover,.feature-top10 .ftc-feature .fa,
.ftc-portfolio-wrapper .portfolio-inner .item .thumbnail .figcaption h3 a:hover,
.single-portfolio .portfolio-info span a:hover,.text-title-h11 h3, .widget-h11 .woocommerce .ftc-meta-widget h3 a:hover,
.widget-h11 .product_list_widget span.price,.ftc-footer .footer-bott11 .copy-com a,.threesixty-product-360 .nav_bar a:hover,
.header-layout12 .header-currency .ftc-currency > a:hover,
.header-layout12 .ftc-sb-language li a.ftc_lang:hover,.group-img-h12 .text1-h12 a:hover,
.group-img-h12 .group-left12 .text1-h12 h3 span, .single-img12_2 .text1-h12 a:hover,
.fresh-look .ftc-sb-button a.ftc-button:hover,.hotspot-product .price, 
body.wpb-js-composer:not(.woocommerce-page) .widget-container.widget_categories ul li a:hover:before ,h4.text-blog,
body.blog .caftc-link span.cat-links a:hover,body.archive.category .caftc-link span.cat-links a:hover,
body.archive.author .caftc-link span.cat-links a:hover, body.archive.tag  .caftc-link span.cat-links a:hover,
.single-post article .post-info .tags-link a:hover,.single-post .vcard.author a:hover,
#comments .the-comment.media span.reply-comment a:hover, .widget-container.widget_categories li.current-cat > a,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link *,
.widget-container.widget_categories ul li.current-cat-parent > a,
body .revslider-home14 .custom.tparrows:before, span.rev-h14,.deal-h14 .product .item-description .meta_info a ,
.text-home14 span.color-h14, .text-left-h14 span.color-h14,.footer-middle15 span.color-h15, .ftc-footer .footer-bottom16 a:hover,
.header-layout17 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *, 
.header-layout17 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
.header-layout17 .cart-total , .blog-home17 .blog-h17 .vcard.author a:hover, .top-middle-h17 h3, .ftc-footer .footer-middle17 a:hover,
.header-layout18 .header-currency .ftc-currency > a:hover,
.header-layout18 .ftc-sb-language li a.ftc_lang:hover, .woocommerce .yith-woocommerce-ajax-product-filter.widget_layered_nav ul li.chosen a,
.text-button-h18 .ftc-sb-button a:hover, .feature-h19 .ftc-feature .ftc_feature_content h3 a:hover,
.feature-h19 .ftc-feature a:hover i,.text-h18-button .ftc-sb-button a:hover, .newsletter-h19 input.button-f9:hover,
body .tp-bullets .tp-bullet.selected:before, body .tp-bullets .tp-bullet:hover:before, .product-home20 .load-more-wrapper .button:hover,
.blog-test-h23.ftc-sb-testimonial .testimonial-content .name a:hover, .newsletter-h23 p.button-sub input[type="submit"]:hover,
.woocommerce .yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-list li.chosen a:before,
.ftc-enable-ajax-search span.hightlight, .text_img_about4 a:hover, .mem_about4 .ftc-team-member a:hover,
.comming-coming2 h1.title-coming span.font-normal, .mail-coming2 p.form-sub input.button-f9:hover, .comming-coming3 h1 span.font-normal,
.title-contact4 span.text-color, .feature-service3 .ftc-feature a:hover .fa, .feature-service5 .ftc-feature a:hover .fa,
body .ftc_desciption_tab a:hover,.footer-menu a:hover, .ftc_excerpt .full-content p.link-more a:hover,
#swipebox-arrows a:hover
         {
                color: <?php echo esc_html($ftc_primary_color) ?>;
        }
		.widget-container ul.product-categories li:hover > a, ul.product-categories li.current > a, .widget-container ul.product-categories ul.children li a:hover, .widget-container ul.product-categories ul.children li.cat-item.current a,
		.woocommerce a.remove:hover, body table.compare-list tr.remove td > a .remove:hover:before, .ftc-footer .copy-com span a:hover,
		.revslider-8 .tp-caption.rev-btn.rs-hover-ready:hover,.blog-home10 article a.button-readmore:hover,
		.widget-container.widget_categories ul li.current-cat > a:before,
		.widget-container.widget_categories ul li.current-cat-parent > a:before ,
		.blog-home17 a.button-readmore:hover, 
		.woocommerce #right-sidebar .widget_layered_nav ul > li.chosen a
		{
			color: <?php echo esc_html($ftc_primary_color) ?> !important;
		}
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        .woocommerce .products.list .product   .item-description .add-to-cart a:hover,
        .woocommerce .products.list .product   .item-description .button-in a:hover,
        .woocommerce .products.list .product   .item-description .meta_info  a:not(.quickview):hover,
        .woocommerce .products.list .product   .item-description .quickview i:hover,
        .counter-wrapper > div,
        .tp-bullets .tp-bullet:after,
        .woocommerce .product .conditions-box .onsale,
        .woocommerce #respond input#submit:hover, 
        .woocommerce a.button:hover,
        .woocommerce button.button:hover, 
        .woocommerce input.button:hover,
        .woocommerce .products .product  .item-image .button-in:hover a:hover,
        .woocommerce .products .product  .item-image a:hover,
        .vc_color-orange.vc_message_box-solid,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce-page nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li a.next:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
        .woocommerce nav.woocommerce-pagination ul li a.prev:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a:hover,
        .woocommerce .form-row input.button:hover,
        .load-more-wrapper .button:hover,
        body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:hover,
        body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce div.product div.summary p.cart a:hover,
        div.product .summary .yith-wcwl-add-to-wishlist a:hover,
        .woocommerce #content div.product .summary .compare:hover,
        div.product .social-sharing li a:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        .tagcloud a:hover,
        .woocommerce .wc-proceed-to-checkout a.button.alt:hover,
        .woocommerce .wc-proceed-to-checkout a.button:hover,
        .woocommerce-cart table.cart input.button:hover,
        .owl-dots > .owl-dot span:hover,
        .owl-dots > .owl-dot.active span,
        footer .style-3 .newletter_sub .button.button-secondary.transparent,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
        body div.pp_details a.pp_close:hover:before,
        .vc_toggle_title h4:after,
        body.error404 .page-header a,
        body .button.button-secondary,
        .pp_woocommerce div.product form.cart .button,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background,
        .style1 .ftc-countdown .counter-wrapper > div,
        .style2 .ftc-countdown .counter-wrapper > div,
        .style3 .ftc-countdown .counter-wrapper > div,
        #cboxClose:hover,
        body > h1,
        table.compare-list .add-to-cart td a:hover,
        .vc_progress_bar.wpb_content_element > .vc_general.vc_single_bar > .vc_bar,
        div.product.vertical-thumbnail .details-img .owl-controls div.owl-prev:hover,
        div.product.vertical-thumbnail .details-img .owl-controls div.owl-next:hover,
        ul > .page-numbers.current,
        ul > .page-numbers:hover,
        article a.button-readmore:hover,.text_service a,.vc_toggle_title h4:before,.vc_toggle_active .vc_toggle_title h4:before,
        .post-item.sticky .post-info .entry-info .sticky-post,
        .woocommerce .products.list .product   .item-description .compare.added:hover,
        .woocommerce .product   .item-description .meta_info a:hover,
        .woocommerce-page .product   .item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover, span.cart-number,
		.vc_row.countdown-home .counter-wrapper > div, .ftc-products-category .tab-item .size-thumbnail,
		.single-trust img, p.after-title:after, .blogs article h3.product_title:after, .ftc-feature .fa
        ,footer#colophon .social-icons a:hover,.testimonial-content.has-image:before, .testimonial-content.has-image:after,
		.text-shop .wpb_text_column, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle:hover,
		.woocommerce div.product div.summary p.cart a, .woocommerce div.product form.cart .button, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover
		, .woocommerce #content table.wishlist_table.cart a.remove:hover, .vc_row.button-new, button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="submit"]:hover, input[type="submit"]:focus,
.details_thumbnails .owl-nav .owl-prev:hover, .details_thumbnails .owl-nav .owl-next:hover, .nav-links span.page-numbers.current, .nav-links a.page-numbers:hover,
body .subscribe_comingsoon .newletter_sub_input .button.button-secondary:hover,#to-top a:hover,.vc_row.countdown-home .counter-wrapper > div,.vc_row.countdown-home .counter-wrapper > div .number-wrapper, .tp-bullets .tp-bullet:after ,
 .testimonial-content.has-image:before, .testimonial-content.has-image:after,
p.button-sub input[type="submit"] , .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.active,
.dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover,
.dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover,
.dokan-single-store .dokan-store-tabs ul li a:hover, body .dokan-pagination-container .dokan-pagination li a:hover,
.dokan-pagination-container .dokan-pagination li.active a, input[type="submit"].dokan-btn-danger, a.dokan-btn-danger, .dokan-btn-danger,
input[type="submit"].dokan-btn-theme, a.dokan-btn-theme, .dokan-btn-theme, .cart-total,
p.woocommerce-mini-cart__buttons.buttons > a.button.checkout.wc-forward:hover,
.woocommerce-cart table.cart button.button:hover, .cookies-buttons a.btn.btn-size-small.btn-color-primary.cookies-accept-btn,
.woocommerce .product .images .ftc-product-video-button:hover,
 .ftc-mobile-wrapper .menu-text .btn-toggle-canvas.btn-danger,
 .woocommerce form .form-row .button:hover,.woocommerce-MyAccount-content button.button:hover,
 .single-post .form-submit input#submit:hover, .cookies-buttons  a.cookies-more-btn,
 .mfp-close-btn-in .mfp-close:hover, .test-home5.ftc-sb-testimonial .owl-dots > .owl-dot > span:hover,
 .test-home5.ftc-sb-testimonial .owl-dots > .owl-dot.active > span,.text-home6 h2:after,
 .header-ftc.header-layout7,  .header-ftc.header-layout7 .header-sticky-hide,
 .ftc-text-h7 .ftc-sb-button a, body .rev_slider_wrapper .custom-2.tp-bullets .tp-bullet.selected,
body .rev_slider_wrapper .custom-2.tp-bullets .tp-bullet:hover,.slider-product-8 .owl-carousel .owl-dot.active,
.slider-product-8 .owl-carousel .owl-dot:hover, .product-deal-home8 .counter-wrapper > div span.number,
.product-deal-home8 .product .item-description .meta_info .add-to-cart a:hover,
.blog-home8 .owl-carousel .owl-dot.active,
.blog-home8 .owl-carousel .owl-dot:hover, .top_footer8,.blog-home5 .blogs article h3.product_title:hover:after,
.header-layout8 .header-nav-menu, 
.header-layout8 .ftc_search_ajax .search-button,
.header-layout8 .cart-total:hover:before , .title-home9 .owl-nav > div:hover,.slider-home9 .product .item-description .meta_info a:hover,
.slider-home9 .product .item-description .meta_info .add-to-cart a:hover,
.feature-h9 .ftc-feature:hover,.vc_row.wpb_row.vc_row-fluid.footer-top9,
.testimonial-h10.ftc-sb-testimonial .owl-dots > .owl-dot > span:hover,
.testimonial-h10.ftc-sb-testimonial .owl-dots > .owl-dot.active > span, .video-text-h10 .ftc-button,
.ftc-portfolio-wrapper .filter-bar  li.current, .ftc-portfolio-wrapper .filter-bar li:hover,
.ftc-portfolio-wrapper .portfolio-inner .item .thumbnail .icon-group .zoom-img,
.ftc-portfolio-wrapper .item .icon-group div.social-portfolio, .single-portfolio .single-navigation a:hover:before,
.category-h11 span.sub-product-categories a:hover, .newsletter-f11 p.button-sub input[type="submit"]:hover,
body.blog article a.button-readmore:hover,.archive.author a.button-readmore:hover,
.archive.tag  a.button-readmore:hover,
.archive.category a.button-readmore:hover,.blog-image.gallery .owl-nav > div:hover,.blog-newside  article a.button-readmore:hover,
.blog blockquote.blockquote-bg,.archive.author blockquote.blockquote-bg,
.archive.tag blockquote.blockquote-bg,
.archive.category blockquote.blockquote-bg,.single-post blockquote.blockquote-bg,
.blog-timeline article.post-wrapper:hover .date-blog-timeline,.blog-timeline .load-more-wrapper a.load-more.button:hover,
.quote blockquote.blockquote-bg, .blog-timeline .date-timeline:hover,
body .revslider-home14 .custom.tparrows:hover:before,.deal-h14.ftc-product-time-deal .counter-wrapper > div .number-wrapper,
.text-home14 .ftc-sb-button a:hover,.text-home14 h3:after, .text-left-h14 a,
.header-layout15 a.ftc-cart-tini.cart-item-canvas:before, 
	.header-layout15 a.ftc-cart-tini:before,.text-home15 p:before, .single-home16 h2:after,
body.wpb-js-composer .product-home16 .vc_general.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tab a:hover,
body.wpb-js-composer .product-home16 .vc_general.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tab.vc_active a	,
.ftc-text-home16 .img-left, .text-button-h18 h2:after, .text-button-h18 .ftc-sb-button:before, 
.text-button-h18 .ftc-sb-button:after, .text-h18-button h2:after,.text-h18-button .ftc-sb-button:before, 
.text-h18-button .ftc-sb-button:after, .newsletter-h18 .ftc-text-h12 .ftc-title h2:after,
.vc_row.footer-bott18, .tp-caption.rev-btn.rs-hover-ready:before, .tp-caption.rev-btn.rs-hover-ready:after,
.single-img19  p:before, .single-img19  p:after, .text-button-h19:before, .product-home20 .load-more-wrapper .button:before, 
.vc_row.newsletter-h22, .header-layout22 .ftc_search_ajax .search-button, .header-layout23 .ftc_search_ajax .search-button,
.header-layout23, .header-layout23 .header-nav-menu, .revslider-product23 .header-title .product_title, .revslider-product23 .counter-wrapper,
.wpb-js-composer .slider-home23 .vc_tta-container h2:before,
.blog-test-h23 h4.title-test-h22:before, .wpb_text_column.newsletter-h23, .vc_row.footer-bott23, .product-home20 .load-more-wrapper .button:before, 
.product-home20 .load-more-wrapper .button:after, .footer-top15 .text-insta i, .error_2 p.button-error a:hover,.error_4 p.button-error a:hover,
.text-video-about2 li i, .single-about4 .ftc-sb-button a:hover, .mail-coming2 p.button-sub input[type="submit"]:hover,
.contact-us2 h3:before, .wpcf7 input[type^="submit"]:hover,.text_faq3 h3:before,.text_ser2 .ftc-sb-button a:hover, .vc_row.brand-text-ser3,
.service_part > .wpb_column > .vc_column-inner:hover > .wpb_wrapper, .service_part .wpb_column:hover .group-1,
.service_part .vc_btn3-container a.vc_general.vc_btn3, .slider-home23 .product .conditions-box .onsale:before,
.revslider-product23 .product .conditions-box .onsale:before,.woocommerce #review_form #respond .form-submit input:hover,
.return-to-shop a.button.wc-backward:hover,
.tp-bullets.custom_2 .tp-bullet.selected,
.tp-bullets.custom_2 .tp-bullet:hover,
.home_8.tp-bullets .tp-bullet.selected,
.home_8.tp-bullets .tp-bullet:hover,
#mega_main_menu.primary .mega_dropdown > li > .item_link:hover *:after,
.ftc-smartmenu li:hover > a,
.ftc-smartmenu li.current-menu-ancestor > a
 {
                background-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
		.tp-caption.rev-btn.rs-hover-ready, .text-deal-home1 a.ftc-button:hover,
        .text-deal a.ftc-button.ftc-button-1.small:hover,
        button.button.button-secondary.transparent,
		.ftc-mobile-wrapper #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor,
		.ftc-mobile-wrapper #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item
		,.button-new5.button-new a.ftc-button:hover, .revslider-9 .tparrows:hover
		,.slider-home9 .product .item-image .group-button-product > a:hover,
		.revslider-11 .custom.tparrows:hover, .product-deal-h11 .counter-wrapper > div span.number:hover,
		.product-home11 .product .item-image .group-button-product a:hover,
		.product-home16 .product .item-image a:hover,
		.revslider-17 .custom.tparrows:hover, .slider-h17 .product .item-image .group-button-product a:hover,
		.text-img-h17 .ftc-sb-button a:hover{
			background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
		}
	.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        .counter-wrapper > div,
        #right-sidebar .product_list_widget:hover li,
        .woocommerce .product   .item-description .meta_info a:hover,
        .woocommerce-page .product   .item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .ftc-products-category ul.tabs li:hover,
        .ftc-products-category ul.tabs li.current,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
         body div.pp_details a.pp_close:hover:before,
        .wpcf7 p input:focus,
        .wpcf7 p textarea:focus,
        .woocommerce form .form-row .input-text:focus,
        body .button.button-secondary,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        #cboxClose:hover, .woocommerce-account .woocommerce-MyAccount-navigation li.is-active,
        .ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .compare:hover,
        .ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .add_to_cart_button a:hover,
        .woocommerce .product   .item-description .meta_info .add-to-cart a:hover,
        .ftc-meta-widget.item-description .meta_info .add-to-cart a:hover, .ftc-sb-testimonial .active .testimonial-content .info,
		.woocommerce nav.woocommerce-pagination ul li a.prev:hover, .woocommerce-page nav.woocommerce-pagination ul li a.prev:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, 
		.woocommerce-page nav.woocommerce-pagination ul li a:hover, .tagcloud a:hover,.nav-links span.page-numbers.current, .nav-links a.page-numbers:hover
		, body .subscribe_comingsoon .newletter_sub_input .button.button-secondary:hover,#to-top a, .ftc-sb-testimonial .active .testimonial-content .info
        , .newsletterpopup .form-sub input[type="email"], input[type="submit"].dokan-btn-danger, a.dokan-btn-danger, .dokan-btn-danger,
		input[type="submit"].dokan-btn-theme, a.dokan-btn-theme, .dokan-btn-theme,
		#mega_main_menu.primary li.default_dropdown > .mega_dropdown > .menu-item > .item_link:hover:before,
		p.woocommerce-mini-cart__buttons.buttons > a.button.wc-forward:hover,
		p.woocommerce-mini-cart__buttons.buttons > a.button.checkout.wc-forward:hover,
		.ftc-mobile-wrapper .menu-text .btn-toggle-canvas.btn-danger,
		.after-loop-wrapper span.page-load-status, .banner1-home7 .text-home6 > .wpb_wrapper,
		.product-deal-home8 .counter-wrapper > div .number-wrapper:after,
		.title-home9 .product-deal-h9.ftc-product-time-deal, .slider-home9 .product .item-description .meta_info .add-to-cart a:hover,
		.woocommerce #content div.product .woocommerce-tabs.vertical-product-tabs ul.tabs li:hover a
,.woocommerce #content div.product .woocommerce-tabs.vertical-product-tabs ul.tabs li.description_tab.active a,
.test-home11.ftc-sb-testimonial .active.center .testimonial-content .avatar,
.fresh-look>.wpb_column>.wpb_wrapper:hover .text-lookbook>.wpb_column>.vc_column-inner,
.fresh-look .ftc-sb-button a.ftc-button:hover:after, body.blog article a.button-readmore:hover:hover,
.archive.author a.button-readmore:hover,
.archive.tag  a.button-readmore:hover,
.archive.category a.button-readmore:hover, .blog-newside article a.button-readmore:hover,
.single-post .form-submit input#submit:hover,.blog-timeline article.post-wrapper:hover,
.blog-timeline article.post-wrapper:hover:before,.blog-timeline article.post-wrapper:hover .date-blog-timeline,
body .revslider-home14 .custom.tparrows:before,.deal-h14 .product .item-description .meta_info a,
.text-deal-home16 .woocommerce .ftc-product-time-deal.ftc-slider .products .product:before,
.service_part > .wpb_column > .vc_column-inner:hover > .wpb_wrapper, .dokan-single-store .dokan-store-tabs ul li a:hover {
                border-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
		.woocommerce nav.woocommerce-pagination ul li a.prev:hover, .woocommerce-page nav.woocommerce-pagination ul li a.prev:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, 
		.woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li span.current,
		.text-home14 .ftc-sb-button a, .button-new16.button-new a.ftc-button:hover,
	.single-about4 .ftc-sb-button a:hover
		{
			border-color: <?php echo esc_html($ftc_primary_color) ?> !important;
		}
        #ftc_language ul ul,
        .header-currency ul,
        .ftc-account .dropdown-container,
        .ftc-shop-cart .dropdown-container,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item,
        #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        #mega_main_menu > .menu_holder > .menu_inner > ul > li.current_page_item > a:first-child:after,
        #mega_main_menu > .menu_holder > .menu_inner > ul > li > a:first-child:hover:before,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:before,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link:before,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown,
        .woocommerce .product .conditions-box .onsale:before,
        .woocommerce .product .conditions-box .featured:before,
        .woocommerce .product .conditions-box .out-of-stock:before, #dropdown-list,
		.woocommerce-info,.tini-cart-inner, .woocommerce-message,
		span.page-load-status p.infinite-scroll-request:after,
		.custom-2.tp-bullets .tp-bullet.selected:after,
.custom-2.tp-bullets .tp-bullet:hover:after,.slider-product-8 .owl-carousel .owl-dot.active:after,
.slider-product-8 .owl-carousel .owl-dot:hover:after, .product-deal-home8 .counter-wrapper > div span.number:after,
.blog-home8 .owl-carousel .owl-dot.active:after,
.blog-home8 .owl-carousel .owl-dot:hover:after,.title-home9 .header-title h3.product_title,
.wpb_row.footer-middle9.footer-middle11,body.wpb-js-composer .slider-home23 .vc_general.vc_tta-tabs .vc_tta-tabs-container,
.blog-test-h23 h4.title-test-h22,
.home_8.tp-bullets .tp-bullet.selected:after,
.home_8.tp-bullets .tp-bullet:hover:after
        {
                border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .woocommerce .products.list .product:hover  .item-description:after,
        .woocommerce-page .products.list .product:hover  .item-description:after
        {
                border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        footer#colophon .ftc-footer .widget-title:before,
        .woocommerce div.product .woocommerce-tabs ul.tabs,
        #customer_login h2 span:before,
        .cart_totals  h2 span:before, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item, #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover, #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link
		,.test-2 .ftc-sb-testimonial .active .testimonial-content .info, .text-home6 a,
		.test-2.ftc-sb-testimonial .active .testimonial-content .info,
		body .ftc-sb-testimonial .active .testimonial-content .info, .text-img-home7 h6 a:hover,
		.custom-2.tp-bullets .tp-bullet:hover:before,
.custom-2.tp-bullets .tp-bullet.selected:before, .slider-product-8 .owl-carousel .owl-dot.active:before,
.slider-product-8 .owl-carousel .owl-dot:hover:before, .product-deal-home8 .counter-wrapper > div span.number:before,
 .blog-home8 .owl-carousel .owl-dot.active:before,
.blog-home8 .owl-carousel .owl-dot:hover:before, .footer-middle8 div.info-com:after,.footer-middle8 div.info-com:before,
footer#colophon .ftc-footer .footer-middle8 .widget-title:after,.banner1-home7 .text-home6 a:hover, .banner1-home8 .text-home6 a:hover,
.header-layout15 #mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link.current-menu-item > .link_content,
.header-layout15 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover > .link_content,
.header-layout15 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_parent > .item_link > .link_content,
.header-layout15 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_ancestor > .item_link > .link_content ,
.footer-middle15 .middle-footer15 input[type="email"], 
.newsletter-h18 p.form-sub input[type="email"] , 
.header-layout21 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link > .link_content > .link_text, 
.header-layout21 #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text, 
.header-layout21 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link > .link_content > .link_text,
.header-layout22 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link > .link_content > .link_text,
.header-layout22 #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text,
.header-layout22 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor  > .item_link > .link_content > .link_text,
.header-layout15 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item  > .item_link > .link_content
, .home_8.tp-bullets .tp-bullet.selected:before,
.home_8.tp-bullets .tp-bullet:hover:before        
        {
                border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        
        /* ========== Secondary color ========== */
        body,
        .ftc-shoppping-cart a.ftc_cart:hover,
        .woocommerce a.remove,
        body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
        .star-rating.no-rating:before,
        .pp_woocommerce .star-rating.no-rating:before,
        .woocommerce .star-rating.no-rating:before,
        .woocommerce-page .star-rating.no-rating:before,
        .woocommerce .product .item-image .group-button-product > div a,
        .woocommerce .product .item-image .group-button-product > a, 
        .vc_progress_bar .vc_single_bar .vc_label,
        .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom,
        .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom,
        .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom,
        .style1 .ftc-countdown .counter-wrapper > div .countdown-meta,
        .style2 .ftc-countdown .counter-wrapper > div .countdown-meta,
        .style3 .ftc-countdown .counter-wrapper > div .countdown-meta,
        .style4 .ftc-countdown .counter-wrapper > div .number-wrapper .number,
        .style4 .ftc-countdown .counter-wrapper > div .countdown-meta,
        body table.compare-list tr.remove td > a .remove:before,
        .woocommerce-page .products.list .product h3.product-name a,
        .ftc-enable-ajax-search .meta .price del, 
        .header-layout32 .header-currency .ftc-currency > a,
        .header-layout32 .ftc-sb-language li .ftc_lang,
        .header-layout32 .ftc_search_ajax .search-button
        {
                color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        .info-company li i,
        body .button.button-secondary:hover,
        div.pp_default .pp_close,
        body div.ftc-product-video.pp_pic_holder .pp_close,
        body .ftc-lightbox.pp_pic_holder a.pp_close,
        #cboxClose,.cookies-buttons a.btn.btn-size-small.btn-color-primary.cookies-accept-btn:hover,
		.video-text-h10 .ftc-button:hover,
        .header-layout32 .ftc-droplist .icon-ftc-droplist,
        .header-layout32 .ftc-droplist .icon-ftc-droplist:before, 
        .header-layout32 .ftc-droplist .icon-ftc-droplist:after
        {
                background-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        body .button.button-secondary:hover,
        #cboxClose
        {
                border-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        
        /* ========== Body Background color ========== */
        body
        {
                background-color: <?php echo esc_html($ftc_body_background_color) ?>;
        }
	/* Custom CSS */
	<?php 
	if( !empty($ftc_custom_css_code) ){
		echo html_entity_decode( trim( $ftc_custom_css_code ) );
	}
	?>