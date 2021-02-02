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
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php global $smof_data; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
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

            <div class="header-ftc header-layout8 header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
                <div class="header-nav">
                    <div class="container">
                        <div class="nav-left">
                            <?php if( isset($smof_data['ftc_middle_header_content']) && $smof_data['ftc_middle_header_content'] ): ?>
                                <div class="custom_content"><?php echo wp_kses_post(do_shortcode(stripslashes($smof_data['ftc_middle_header_content']))); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="nav-right">
                            <?php if( isset($smof_data['ftc_header_currency']) && $smof_data['ftc_header_currency'] ): ?>
                                <div class="header-currency"><?php ftc_woocommerce_multilingual_currency_switcher(); ?></div>
                            <?php endif; ?>

                            <?php if( isset($smof_data['ftc_header_language']) && $smof_data['ftc_header_language'] ): ?>
                                <div class="ftc-sb-language"><?php ftc_wpml_language_selector(); ?></div>
                            <?php endif; ?>

                            <?php if( isset($smof_data['ftc_enable_tiny_account']) && $smof_data['ftc_enable_tiny_account'] ): ?>
                                <div class="ftc-sb-account"><?php print_r(ftc_tiny_account()); ?></div>
                            <?php endif; ?>

                            <?php if( class_exists('YITH_WCWL') && isset($smof_data['ftc_enable_tiny_wishlist']) && $smof_data['ftc_enable_tiny_wishlist'] ): ?>
                            <div class="ftc-my-wishlist"><?php echo wp_kses_post(ftc_tini_wishlist()); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>  
            <div class="header-content <?php echo esc_attr(implode(' ', $header_classes)); ?>"> 
                <div class="container">
                    <div class="mobile-button">
                        <div class="mobile-nav">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                    <div class="logo-wrapper ftc-logo is-desktop"><?php ftc_theme_logo(); ?></div>
                    <div class="logo-wrapper ftc-logo is-mobile"><?php ftc_theme_mobile_logo(); ?></div>

                    <?php if (isset($smof_data['ftc_enable_search']) && $smof_data['ftc_enable_search']): ?>
                        <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                    <?php endif; ?>

                    <?php if (isset($smof_data['ftc_enable_tiny_shopping_cart']) && $smof_data['ftc_enable_tiny_shopping_cart']): ?>
                        <div class="ftc-shop-cart"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
                    <?php endif; ?>
                </div>
                <div class="header-nav-menu">
                    <div class="container">
                        <div class="row">
                            <?php if (has_nav_menu('primary')) : ?>
                                <div class="navigation-primary">
                                    <?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>
                                </div><!-- .navigation-top -->
                            <?php endif; ?>
                            <?php if( isset($smof_data['ftc_header_contact_information']) && $smof_data['ftc_header_contact_information'] ): ?>
                                <p class="custom_contact_information"><?php echo wp_kses_post(do_shortcode(stripslashes($smof_data['ftc_header_contact_information']))); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <div class="site-content-contain">
        <div id="content" class="site-content">
