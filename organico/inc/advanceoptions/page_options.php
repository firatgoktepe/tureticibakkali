<?php
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array();
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'organico'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'organico')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'organico')
									,'boxed' 	=> esc_html__('Boxed', 'organico')
									,'wide' 	=> esc_html__('Wide', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'organico')
									,'1-1-0' => esc_html__('Left Sidebar', 'organico')
									,'0-1-1' => esc_html__('Right Sidebar', 'organico')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'organico')
								,'0'	=> esc_html__('No', 'organico')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'organico')
								,'0'	=> esc_html__('No', 'organico')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'organico')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'organico')
									,'layout1'  		=> esc_html__('Header Layout 1', 'organico')
									,'layout2' 		=> esc_html__('Header Layout 2', 'organico')
									,'layout3' 		=> esc_html__('Header Layout 3', 'organico')
									,'layout4' 		=> esc_html__('Header Layout 4', 'organico')
									,'layout5' 		=> esc_html__('Header Layout 5', 'organico')
									,'layout6' 		=> esc_html__('Header Layout 6', 'organico')
									,'layout7' 		=> esc_html__('Header Layout 7', 'organico')
									,'layout8' 		=> esc_html__('Header Layout 8', 'organico')
									,'layout11' 		=> esc_html__('Header Layout 11', 'organico')
									,'layout12' 		=> esc_html__('Header Layout 12', 'organico')
									,'layout14' 		=> esc_html__('Header Layout 14', 'organico')
									,'layout15' 		=> esc_html__('Header Layout 15', 'organico')
									,'layout16' 		=> esc_html__('Header Layout 16', 'organico')
									,'layout17' 		=> esc_html__('Header Layout 17', 'organico')
									,'layout18' 		=> esc_html__('Header Layout 18', 'organico')
									,'layout19' 		=> esc_html__('Header Layout 19', 'organico')
									,'layout20' 		=> esc_html__('Header Layout 20', 'organico')
									,'layout21' 		=> esc_html__('Header Layout 21', 'organico')
									,'layout22' 		=> esc_html__('Header Layout 22', 'organico')
									,'layout23' 		=> esc_html__('Header Layout 23', 'organico')
									,'layout24' 		=> esc_html__('Header Layout 24', 'organico')
									,'layout25' 		=> esc_html__('Header Layout 25', 'organico')
									,'layout26' 		=> esc_html__('Header Layout 26', 'organico')
									,'layout27' 		=> esc_html__('Header Layout 27', 'organico')
									,'layout28' 		=> esc_html__('Header Layout 28', 'organico')
									,'layout29' 		=> esc_html__('Header Layout 29', 'organico')
									,'layout30' 		=> esc_html__('Header Layout 30', 'organico')
									,'layout31' 		=> esc_html__('Header Layout 31', 'organico')
									,'layout32' 		=> esc_html__('Header Layout 32', 'organico')
									,'layout33' 		=> esc_html__('Header Layout 33', 'organico')
									,'layout34' 		=> esc_html__('Header Layout 34', 'organico')
									,'layout35' 		=> esc_html__('Header Layout 35', 'organico')
									,'layout36' 		=> esc_html__('Header Layout 36', 'organico')
									,'layout37' 		=> esc_html__('Header Layout 37', 'organico')
									,'layout38' 		=> esc_html__('Header Layout 38', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'organico')
								,'0'	=> esc_html__('No', 'organico')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'organico')
				,'desc'		=> esc_html__('Only available on transparent header', 'organico')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'organico')
								,'light'	=> esc_html__('Light', 'organico')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'organico')
								,'0'	=> esc_html__('No', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'organico')
								,'0'	=> esc_html__('No', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'organico')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'organico')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'organico')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'organico')
								,'1'		=> esc_html__('Yes', 'organico')
								,'0'		=> esc_html__('No', 'organico')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'organico')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'organico')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'organico')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'organico')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
$options[] = array(
	'id'		=> 'primary_color'
	,'label'	=> esc_html__('Primary Color', 'organico')
	,'desc'		=> ''
	,'type'		=> 'colorpicker'
	);	
$options[] = array(
	'id'		=> 'secondary_color'
	,'label'	=> esc_html__('Secondary Color', 'organico')
	,'desc'		=> ''
	,'type'		=> 'colorpicker'
	);
$options[] = array(
	'id'		=>'body_font_google'
	,'label' 	=> esc_html__('Body Font - Google Font', 'organico')
	,'desc'		=> ''
    ,'type' 	=> 'text'
	);

$options[] = array(
	'id'		=>'secondary_body_font_google'
	,'label' 	=> esc_html__('Secondary Body Font - Google Font', 'organico')
	,'desc'		=> ''
    ,'type' 	=> 'text'
	);
	
			
if( !class_exists('ThemeFtc_GET') ){			
	$footer_blocks = array('0' => '');
	
	$args = array(
		'post_type'			=> 'ftc_footer'
		,'post_status'	 	=> 'publish'
		,'posts_per_page' 	=> -1
	);
	
	$posts = new WP_Query($args);
		
		if( !empty( $posts->posts ) && is_array( $posts->posts ) ){
			foreach( $posts->posts as $p ){
				$footer_blocks[$p->ID] = $p->post_title;
			}
		}

	$options[] = array(
	'id'		=> 'page_footer_heading'
	,'label'	=> 'Page Footer'
	,'desc'		=> esc_html__('You also need to add the FTC- Footer widget into Footer Top,Middle,Bottom', 'organico')
	,'type'		=> 'heading'
	);

$options[] = array(
	'id'		=> 'footer_top'
	,'label'	=> esc_html__('Footer Top', 'organico')
	,'desc'		=> ''
	,'type'		=> 'select'
	,'options'	=> $footer_blocks
	);

$options[] = array(
	'id'		=> 'footer_middle'
	,'label'	=> esc_html__('Footer Middle', 'organico')
	,'desc'		=> ''
	,'type'		=> 'select'
	,'options'	=> $footer_blocks
	);

$options[] = array(
	'id'		=> 'footer_bottom'
	,'label'	=> esc_html__('Footer Bottom', 'organico')
	,'desc'		=> ''
	,'type'		=> 'select'
	,'options'	=> $footer_blocks
	);

}

?>