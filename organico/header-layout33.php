<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Organico
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg no-js">
<head>
    <?php global $smof_data; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php 
    ftc_theme_favicon();
    wp_head(); 
    ?>
</head>
<?php
$header_classes = array();
if( isset($smof_data['ftc_enable_sticky_header']) && $smof_data['ftc_enable_sticky_header'] ){
    $header_classes[] = 'header-sticky';
}
?>
<body <?php body_class(); ?>>
    <?php ftc_header_mobile_navigation(); ?>
    <div id="page" class="site">
     <a class="skip-link screen-reader-text" href="#content"><?php esc_attr( 'Skip to content', 'organico' ); ?></a>

     <header id="masthead" class="site-header">

        <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
            <div class="top_bar_element">
                <div class="container">
                <?php if(isset($smof_data['ftc_header_currency']) && $smof_data['ftc_header_currency'] ): ?>
                    <div class="header-currency"><?php echo ftc_woocommerce_multilingual_currency_switcher(); ?></div>
                <?php endif; ?>

                <?php if(isset($smof_data['ftc_middle_header_content']) && $smof_data['ftc_middle_header_content'] ): ?>
                   <div class="custom_content"><?php echo wp_kses_post(do_shortcode(stripslashes($smof_data['ftc_middle_header_content']))); ?></div>
               <?php endif; ?>

               <?php if(isset($smof_data['ftc_header_language']) && $smof_data['ftc_header_language'] ): ?>
                <div class="ftc-sb-language"><?php echo ftc_wpml_language_selector(); ?></div>
            <?php endif; ?>
            </div>
        </div>

        <div class="header-content <?php echo esc_attr(implode(' ', $header_classes)); ?>">
            <div class="container">
                <div class="content_main">
                    <div class="mobile-button">
                        <div class="mobile-nav">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                    <div class="logo-wrapper ftc-logo is-desktop"><?php ftc_theme_logo(); ?></div>
                    <div class="logo-wrapper ftc-logo is-mobile"><?php ftc_theme_mobile_logo(); ?></div>

                    <?php if (has_nav_menu('primary')) : ?>
                        <div class="navigation-primary">

                            <?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>

                        </div><!-- .navigation-top -->
                    <?php endif; ?>

                    <div class="right_bar_28">
                        <?php if (isset($smof_data['ftc_enable_search']) && $smof_data['ftc_enable_search']): ?>
                            <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                        <?php endif; ?>

                        <?php if (isset($smof_data['ftc_enable_tiny_shopping_cart']) && $smof_data['ftc_enable_tiny_shopping_cart']): ?>
                            <div class="ftc-shop-cart"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
                        <?php endif; ?>

                        <div class="dropdown-menu-header">
                            <?php if (class_exists('YITH_WCWL') && isset($smof_data['ftc_enable_tiny_wishlist']) && $smof_data['ftc_enable_tiny_wishlist']): ?>
                            <span class="fa fa-bars"></span>
                            <div id="dropdown-list" class="drop">
                                <?php if( class_exists('YITH_WCWL') && isset($smof_data['ftc_enable_tiny_wishlist']) && $smof_data['ftc_enable_tiny_wishlist'] ): ?>
                                <div class="ftc-my-wishlist"><?php echo wp_kses_post(ftc_tini_wishlist()); ?></div>
                            <?php endif; ?>

                            <?php if(isset($smof_data['ftc_enable_tiny_account']) && $smof_data['ftc_enable_tiny_account'] ): ?>
                                <div class="ftc-sb-account"><?php print_r(ftc_tiny_account()); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if(isset($smof_data['ftc_header_content2']) && $smof_data['ftc_header_content2'] ): ?>
               <div class="custom_content_2"><?php echo wp_kses_post(do_shortcode(stripslashes($smof_data['ftc_header_content2']))); ?></div>
           <?php endif; ?>

       </div>
   </div>
</div>
</div>
</header>
<!-- #masthead -->
<!-- Page Slider -->
<?php if (is_page() && isset($ftc_page_datas)): ?>
<?php if ($ftc_page_datas['ftc_page_slider'] && $ftc_page_datas['ftc_page_slider_position'] == 'before_main_content'): ?>

    <?php ftc_show_page_slider(); ?>

<?php endif; ?>
<?php endif; ?>
<div class="site-content-contain">
    <div id="content" class="site-content">
