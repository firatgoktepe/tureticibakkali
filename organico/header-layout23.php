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

            <div class="header-content <?php echo esc_attr(implode(' ', $header_classes)); ?>">
                <div class="container">
                    <div class="mobile-button">
                        <div class="mobile-nav">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                    <div class="logo-wrapper is-desktop"><a href="https://turetici-bakkali.local/">
                <!-- Main logo -->
                                    <img src="https://turetici-bakkali.local/wp-content/uploads/2018/03/logo12-1.png" alt="Organico" title="Organico" class="normal-logo" />
                
                <!-- Logo Text -->
                            </a></div>
                    <div class="logo-wrapper is-mobile"> <a href="https://turetici-bakkali.local/">
                <!-- Main logo -->
                                    <img src="https://turetici-bakkali.local/wp-content/uploads/2018/03/logo12-1.png" alt="Organico" title="Organico" class="normal-logo" />
                
                <!-- Logo Text -->
                            </a></div>

                    <?php if( isset($smof_data['ftc_enable_search']) && $smof_data['ftc_enable_search'] ): ?>
                        <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                    <?php endif; ?>

                    <?php if( isset($smof_data['ftc_enable_tiny_shopping_cart']) && $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                        <div class="ftc-shop-cart"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
                    <?php endif; ?>
                    <div class="dropdown-menu-header">
                        <div class="ftc-droplist">
                            <span class="icon-ftc-droplist"></span>
                        </div>
                        <div id="dropdown-list" class="drop">
                            <?php if( isset($smof_data['ftc_header_currency']) && $smof_data['ftc_header_currency'] ): ?>
                                <div class="header-currency"><?php ftc_woocommerce_multilingual_currency_switcher(); ?></div>
                            <?php endif; ?>

                            <?php if( isset($smof_data['ftc_header_language']) && $smof_data['ftc_header_language'] ): ?>
                                <div class="ftc-sb-language"><?php ftc_wpml_language_selector(); ?></div>
                            <?php endif; ?>

                            <?php if( class_exists('YITH_WCWL') && isset($smof_data['ftc_enable_tiny_wishlist']) && $smof_data['ftc_enable_tiny_wishlist'] ): ?>
                            <div class="ftc-my-wishlist"><?php echo wp_kses_post(ftc_tini_wishlist()); ?></div>
                        <?php endif; ?>

                        <?php if( isset($smof_data['ftc_enable_tiny_account']) && $smof_data['ftc_enable_tiny_account'] ): ?>
                            <div class="ftc-sb-account"><?php print_r(ftc_tiny_account()); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="header-nav-menu">
                <div class="container">
                    <div class="row">
                        <?php
                        if (has_nav_menu('vertical')) {
                            ?>
                            <div class="vertical-menu col-md-3 col-xs-12">
                                <div class="widget-title-wrapper"><h3 class="widget-title title_sub">
                                    <?php echo ftc_get_vertical_menu_heading(); ?>
                                </h3></div>
                                <?php get_template_part('template-parts/navigation/navigation', 'vertical'); ?>
                            </div>
                            <?php
                        }
                        ?>
                        <?php if (has_nav_menu('primary')) : ?>
                            <div class="navigation-primary">
                                <?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>
                            </div><!-- .navigation-top -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- #masthead -->
<div class="site-content-contain">
  <div id="content" class="site-content">
