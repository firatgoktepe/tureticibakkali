<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'editor-styles','font-awesome','simple-line-icons','owl-carousel','pretty-photo' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 1000 );


/* Kayit ol Form Customization */

/*
* giris/kayit ol sayfasındaki kayıt ol formuna yeni alanlar ekler
*/
function wolinka_extra_register_fields() {
?>
<p class="form-row form-row-first">
<label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span>
</label>
<input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
</p>
 
<p class="form-row form-row-last">
<label for="reg_billing_last_name">
<?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span>
</label>
<input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
</p>
<div class="clear"></div>
 
<p class="form-row form-row-wide">
<label for="reg_billing_phone">
<?php _e( 'Phone', 'woocommerce' ); ?><span class="required">*</span>
</label>
<input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" />
</p>
<?php
}
add_action( 'woocommerce_register_form_start', 'wolinka_extra_register_fields' );
/**
* Yeni eklenen alanlar doldurulmadığında kullanıcıya uyarı verilmesi sağlanır.
*/
function wolinka_validate_extra_register_fields( $username, $email, $validation_errors ) {
if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
$validation_errors->add( 'billing_first_name_error', __( 'Lütfen adınızı giriniz.', 'woocommerce' ) );
}
if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
$validation_errors->add( 'billing_last_name_error', __( 'Lütfen soyadınız giriniz.', 'woocommerce' ) );
}
if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
$validation_errors->add( 'billing_phone_error', __( 'Lütfen telefon numarınızı giriniz.', 'woocommerce' ) );
}
}
add_action( 'woocommerce_register_post', 'wolinka_validate_extra_register_fields', 10, 3 );
/**
* Extra eklenen alanların panel tarafına kayıt etmesini sağlar.
*/
function wolinka_save_extra_register_fields( $customer_id ) {
if ( isset( $_POST['billing_first_name'] ) ) {
// WordPress default first name field.
update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
// WooCommerce billing first name.
update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
}
if ( isset( $_POST['billing_last_name'] ) ) {
// WordPress default last name field.
update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
// WooCommerce billing last name.
update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
}
if ( isset( $_POST['billing_phone'] ) ) {
// WooCommerce billing phone
update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
}
}
add_action( 'woocommerce_created_customer', 'wolinka_save_extra_register_fields' );




// Change text what you want

add_filter( 'gettext', 'change_post_to_article' );
add_filter( 'ngettext', 'change_post_to_article' );

function change_post_to_article( $translated ) {
$translated = str_ireplace( 'Kuponun var mi?', 'Kupon var mi?', $translated );
$translated = str_ireplace( 'Search', 'Arama', $translated );
$translated = str_ireplace( 'my cart', 'Sepetim', $translated );
$translated = str_ireplace( 'All categories', 'Tüm Kategoriler', $translated );
$translated = str_ireplace( 'Continue Shopping', 'Alışverişe Devam Et', $translated );
$translated = str_ireplace( 'login', 'GİRİŞ', $translated );  
$translated = str_ireplace( 'sign up', 'ÜYE OL', $translated );
$translated = str_ireplace( 'my account', 'HESABIM', $translated );
$translated = str_ireplace( 'ACCOUNT', 'HESABIM', $translated );
$translated = str_ireplace( 'logout', 'ÇIKIŞ', $translated );
$translated = str_ireplace( 'Sort by', 'Sıralama', $translated );
$translated = str_ireplace( 'Create New Account', 'ÜYE OL', $translated );
$translated = str_ireplace( 'Grid view', 'Izgara Görünümü', $translated );
$translated = str_ireplace( 'List view', 'Liste Görünümü', $translated );
$translated = str_ireplace( 'Subscribe', 'Abone Ol', $translated );
return $translated;
}

// END ENQUEUE PARENT ACTION
