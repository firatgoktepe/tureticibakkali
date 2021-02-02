<?php
$placeholder_text = esc_html__('Search', 'organico');

if( ftc_has_woocommerce() ){
	$placeholder_text = esc_html__('Search ...', 'organico');
}

if( is_404() ){
	$placeholder_text = esc_html__('You can back to homepage or seach anything', 'organico');
}
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>">
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'organico' ); ?></span>
	</label>
    <input type="search" id="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>" class="search-field" placeholder="<?php echo esc_attr($placeholder_text); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo ftc_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo esc_html_e( 'Search', 'organico' ); ?></span></button>
</form>
