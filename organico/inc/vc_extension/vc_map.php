<?php 
/*FTC Gallery Instagram*/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Gallery Image Instagram', 'organico' ),
	'base' 		=> 'ftc_insta_image',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'attach_images'
			,'heading' 		=> esc_html__( 'Image', 'organico' )
			,'param_name' 	=> 'img_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image Size', 'organico' )
			,'param_name' 	=> 'img_size'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( '@: Tagname Instagram', 'organico' )
			,'param_name' 	=> 'tag_name'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('Input tagname Instagram', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
	)
) );
vc_map( array(
	'name' => esc_html__( 'Image Hotspot', 'organico' ),
	'base' => 'ftc_image_hotspot',
	'class' => '',
	'category' => esc_html__( 'ThemeFTC', 'organico' ),
	'description' => esc_html__( 'Add hotspots with products to the image', 'organico' ),
	'icon' => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'as_parent' => array( 'only' => 'ftc_hotspot' ),
	'content_element' => true,
	'show_settings_on_create' => true,
	'params' => array(
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'organico' ),
			'param_name' => 'img',
			'holder' => 'img',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'organico' )
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Image size', 'organico' ),
			'param_name' => 'img_size',
			'description' => esc_html__( 'Enter image size. Example: "thumbnail", "medium", "large", "full" ', 'organico' )
		),
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Hotspot icon', 'organico' ),
			'param_name' => 'icon',
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Hotspot action', 'organico' ),
			'param_name' => 'action',
			'value' =>  array(
				esc_html__( 'Hover', 'organico' ) => 'hover',
				esc_html__( 'Click', 'organico' ) => 'click',
			),
			'description' => esc_html__( 'Open hotspot content on click or hover', 'organico' )
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Extra class name', 'organico' ),
			'param_name' => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'organico' )
		)
	),
	'js_view' => 'VcColumnView'
) );

vc_map( array(
	'name' => esc_html__( 'Hotspot', 'organico'),
	'base' => 'ftc_hotspot',
	'as_child' => array( 'only' => 'ftc_image_hotspot' ),
	'content_element' => true,
	'category' => esc_html__( 'ThemeFTC', 'organico' ),
	'icon' => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' => array(
		array(
			'type' => 'ftc_image_hotspot',
			'heading' => esc_html__( 'Hotspot', 'organico' ),
			'param_name' => 'hotspot',
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Hotspot content', 'organico' ),
			'param_name' => 'hotspot_type',
			'value' =>  array(
				esc_html__( 'Product', 'organico' ) => 'product',
				esc_html__( 'Text', 'organico' ) => 'text'
			),
			'description' => esc_html__( 'You can display any product or custom text in the hotspot content.', 'organico' )
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Hotspot dropdown side', 'organico' ),
			'param_name' => 'hotspot_dropdown_side',
			'value' =>  array(
				esc_html__( 'Left', 'organico' ) => 'left',
				esc_html__( 'Right', 'organico' ) => 'right',
				esc_html__( 'Top', 'organico' ) => 'top',
				esc_html__( 'Bottom', 'organico' ) => 'bottom',
			),
			'description' => esc_html__( 'Show the content on left or right side, top or bottom.', 'organico' )
		),
				//Product
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Select product', 'organico' ),
			'param_name' => 'product_id',
			'description' => esc_html__( 'Add products by title.', 'organico' ),
			'settings' => array(
				'multiple' => false,
				'sortable' => true,
				'groups' => true
			),
			'dependency' => array(
				'element' => 'hotspot_type',
				'value' => array( 'product' )
			)
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Extra class name', 'organico' ),
			'param_name' => 'el_class',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'organico' )
		)
	),
) );
if( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_ftc_image_hotspot extends WPBakeryShortCodesContainer {}
}

		// Replace Wbc_Inner_Item with your base name from mapping for nested element
if( class_exists( 'WPBakeryShortCode' ) ){
	class WPBakeryShortCode_ftc_hotspot extends WPBakeryShortCode {}
}

add_filter( 'vc_autocomplete_ftc_hotspot_product_id_callback',	'ftc_productIdAutocompleteSuggester', 10, 1 ); 
add_filter( 'vc_autocomplete_ftc_image_hotspot_product_id_render','ftc_productIdAutocompleteSuggester', 10, 1 );

if ( ! function_exists( 'ftc_productIdAutocompleteSuggester' ) ) {
	function ftc_productIdAutocompleteSuggester( $query ) {
		global $wpdb;
		$product_id = (int) $query;
		$post_meta_infos = $wpdb->get_results( $wpdb->prepare( "SELECT a.ID AS id, a.post_title AS title, b.meta_value AS sku
			FROM {$wpdb->posts} AS a
			LEFT JOIN ( SELECT meta_value, post_id  FROM {$wpdb->postmeta} WHERE `meta_key` = '_sku' ) AS b ON b.post_id = a.ID
			WHERE a.post_type = 'product' AND ( a.ID = '%d' OR b.meta_value LIKE '%%%s%%' OR a.post_title LIKE '%%%s%%' )", $product_id > 0 ? $product_id : - 1, stripslashes( $query ), stripslashes( $query ) ), ARRAY_A );

		$results = array();
		if ( is_array( $post_meta_infos ) && ! empty( $post_meta_infos ) ) {
			foreach ( $post_meta_infos as $value ) {
				$data = array();
				$data['value'] = $value['id'];
				$data['label'] = __( 'Id', 'organico' ) . ': ' . $value['id'] . ( ( strlen( $value['title'] ) > 0 ) ? ' - ' . __( 'Title', 'organico' ) . ': ' . $value['title'] : '' ) . ( ( strlen( $value['sku'] ) > 0 ) ? ' - ' . __( 'Sku', 'organico' ) . ': ' . $value['sku'] : '' );
				$results[] = $data;
			}
		}

		return $results;
	}
}
/* FTC Portfolio */
vc_map( array(
	'name' 		=> esc_html__( 'FTC Portfolio', 'organico' ),
	'base' 		=> 'ftc_portfolio',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> array(
				'2'		=> '2'
				,'3'	=> '3'
				,'4'	=> '4'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> '8'
			,'description' 	=> esc_html__('Number of Posts', 'organico')
		)
		,array(
			'type' 			=> 'ftc_category'
			,'heading' 		=> esc_html__( 'Categories', 'organico' )
			,'param_name' 	=> 'categories'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			,'class'		=> 'ftc_portfolio'
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'organico' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'organico')		=> 'none'
				,esc_html__('ID', 'organico')		=> 'ID'
				,esc_html__('Date', 'organico')		=> 'date'
				,esc_html__('Name', 'organico')		=> 'name'
				,esc_html__('Title', 'organico')		=> 'title'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'organico' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'organico')		=> 'DESC'
				,esc_html__('Ascending', 'organico')		=> 'ASC'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show portfolio title', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show portfolio date', 'organico' )
			,'param_name' 	=> 'show_date'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show filter bar', 'organico' )
			,'param_name' 	=> 'show_filter_bar'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show load more button', 'organico' )
			,'param_name' 	=> 'show_load_more'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Load more button text', 'organico' )
			,'param_name' 	=> 'load_more_text'
			,'admin_label' 	=> false
			,'value' 		=> 'Show more'
			,'description' 	=> ''
		)
	)
) );

add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'organico' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
		"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'organico' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Horizontal', 'organico')		=>  'feature-horizontal'
					,esc_html__('Vertical', 'organico')		=>  'image-feature'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'organico' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'organico' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Default', 'organico')		=>  'icon-default'
					,esc_html__('Small', 'organico')			=>  'icon-small'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'organico' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'organico' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'organico')
				,'dependency' 	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'organico' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'organico' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'organico' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'organico' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('New Window Tab', 'organico')	=>  '_blank'
					,esc_html__('Self', 'organico')			=>  '_self'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'organico' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'organico')
			)
		)
	) );
	/** FTC Instagram **/
	vc_map( array(
		'name'   => esc_html__( 'FTC Instagram Feed', 'organico' ),
		'base'   => 'ftc_instagram',
		'class'  => '',
		'category'  => 'ThemeFTC',
		'icon'          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params'  => array(
			array(
				'type'    => 'textfield'
				,'heading'   => esc_html__( 'Title', 'organico' )
				,'param_name'  => 'title'
				,'admin_label'  => true
				,'value'   => 'Instagram'
				,'description'  => ''
			)
			,array(
				'type'    => 'textfield'
				,'heading'   => esc_html__( 'Username', 'organico' )
				,'param_name'  => 'username'
				,'admin_label'  => true
				,'value'   => ''
				,'description'  => ''
			)   
			,array(
				'type'    => 'textfield'
				,'heading'   => esc_html__( 'Number', 'organico' )
				,'param_name'  => 'number'
				,'admin_label'  => true
				,'value'   => '9'
				,'description'  => ''
			)   
			,array(
				'type'    => 'textfield'
				,'heading'   => esc_html__( 'Column', 'organico' )
				,'param_name'  => 'column'
				,'admin_label'  => true
				,'value'   => '3'
				,'description'  => ''
			)
			,array(
				'type'    => 'dropdown'
				,'heading'   => esc_html__( 'Image Size', 'organico' )
				,'param_name'  => 'size'
				,'admin_label'  => true
				,'value'   => array(
					esc_html__('Large', 'organico') => 'large'
					,esc_html__('Small', 'organico')  => 'small'
					,esc_html__('Thumbnail', 'organico') => 'thumbnail'
					,esc_html__('Original', 'organico') => 'original'
				)
				,'description'  => ''
			)
			,array(
				'type'    => 'dropdown'
				,'heading'   => esc_html__( 'Target', 'organico' )
				,'param_name'  => 'target'
				,'admin_label'  => true
				,'value'   => array(
					esc_html__('Current window', 'organico') => '_self'
					,esc_html__('New window', 'organico')  => '_blank'
				)
				,'description'  => ''
			)  
			,array(
				'type'    => 'textfield'
				,'heading'   => esc_html__( 'Cache time (hours)', 'organico' )
				,'param_name'  => 'cache_time'
				,'admin_label'  => true
				,'value'   => '12'
				,'description'  => ''
			)
		)
	) );
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'organico' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
		"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'organico' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'organico' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Grid', 'organico')		=> 'grid'
					,esc_html__('Slider', 'organico')	=> 'slider'
					,esc_html__('Masonry', 'organico')	=> 'masonry'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Blog Style', 'organico' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Default', 'organico')		=> ''
					,esc_html__('Version Home 1', 'organico')		=> 'blog-home'
					,esc_html__('Version Home 4', 'organico')		=> 'blog-home blog-home4'
					,esc_html__('Version Home 5', 'organico')		=> 'blog-home blog-home5'
					,esc_html__('Version Home 8', 'organico')		=> 'blog-home blog-home5 blog-home8'
					,esc_html__('Version Home 9', 'organico')		=> 'blog-home9'
					,esc_html__('Version Home 10', 'organico')		=> 'blog-home blog-home5 blog-home10'
					,esc_html__('Version Home 11', 'organico')		=> 'blog-home11'
					,esc_html__('Version Home 12', 'organico')		=> 'blog-home blog-home12'
					,esc_html__('Version Home 16', 'organico')		=> 'blog-home blog-home16'
					,esc_html__('Version Home 17', 'organico')		=> 'blog-home17'
					,esc_html__('Version Home 18', 'organico')		=> 'blog-home blog-home12 blog-home18'
					,esc_html__('Version 2 Columns', 'organico')		=> 'blog-newside blog-2-column'
					,esc_html__('Version 3 Columns', 'organico')		=> 'blog-newside blog-3-column'
					,esc_html__('Version Blog Sidebar', 'organico')		=> 'blog-newside'
					,esc_html__('Version Blog Grid Sidebar', 'organico')		=> 'blog-newside blog-grid'
					,esc_html__('Version Blog Timeline', 'organico')		=> 'blog-newside blog-timeline'
					,esc_html__('Version Blog Timeline Right', 'organico')		=> 'blog-newside blog-timeline timeright'
					,esc_html__('Version Timeline 2 Columns', 'organico')		=> 'blog-newside blog-timeline blog-timeline-2'
				)
				,'description' 	=> esc_html__( 'Select Style of Blog', 'organico' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'organico' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
					'1'				=> '1'
					,'2'			=> '2'
					,'3'			=> '3'
					,'4'			=> '4'
				)
				,'description' 	=> esc_html__( 'Number of Columns', 'organico' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'organico' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'organico' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'organico' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'organico' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('None', 'organico')		=> 'none'
					,esc_html__('ID', 'organico')		=> 'ID'
					,esc_html__('Date', 'organico')		=> 'date'
					,esc_html__('Name', 'organico')		=> 'name'
					,esc_html__('Title', 'organico')		=> 'title'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'organico' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Descending', 'organico')		=> 'DESC'
					,esc_html__('Ascending', 'organico')		=> 'ASC'
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'organico' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'organico' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'organico' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('No', 'organico')	=> 0
					,esc_html__('Yes', 'organico')	=> 1
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'organico' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'organico' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'organico' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show count view', 'organico' )
				,'param_name' 	=> 'show_view'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'organico' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
			)
			,array(
				'type' => 'textfield'
				,'heading' => esc_html__( 'Readmore text', 'organico' )
				,'param_name' => 'read_more_text'
				,'admin_label' => false
				,'value' => 'Readmore'
				,'description' => ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'organico' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '120'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'organico' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('No', 'organico')	=> 0
					,esc_html__('Yes', 'organico')	=> 1
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'organico' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show dots button', 'organico' )
				,'param_name' 	=> 'dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'organico' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'organico')	=> 1
					,esc_html__('No', 'organico')	=> 0
				)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'organico')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'organico' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'organico')
				,'group'		=> esc_html__('Slider Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'organico' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
					esc_html__('1', 'organico')	=> 1
					,esc_html__('2', 'organico')	=> 2
					,esc_html__('3', 'organico')	=> 3
					,esc_html__('4', 'organico')	=> 4

				)
				,'description' 	=> esc_html__('Set items on 991px', 'organico')
				,'group'		=> esc_html__('Responsive Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'organico' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
					esc_html__('1', 'organico')	=> 1
					,esc_html__('2', 'organico')	=> 2
					,esc_html__('3', 'organico')	=> 3
					,esc_html__('4', 'organico')	=> 4

				)
				,'description' 	=> esc_html__('Set items on 768px', 'organico')
				,'group'		=> esc_html__('Responsive Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'organico' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
					esc_html__('1', 'organico')	=> 1
					,esc_html__('2', 'organico')	=> 2
					,esc_html__('3', 'organico')	=> 3
					,esc_html__('4', 'organico')	=> 4

				)
				,'description' 	=> esc_html__('Set items on 640px', 'organico')
				,'group'		=> esc_html__('Responsive Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'organico' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
					esc_html__('1', 'organico')	=> 1
					,esc_html__('2', 'organico')	=> 2
					,esc_html__('3', 'organico')	=> 3
					,esc_html__('4', 'organico')	=> 4

				)
				,'description' 	=> esc_html__('Set items on 480px', 'organico')
				,'group'		=> esc_html__('Responsive Options', 'organico')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'organico' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
					esc_html__('1', 'organico')	=> 1
					,esc_html__('2', 'organico')	=> 2
					,esc_html__('3', 'organico')	=> 3
					,esc_html__('4', 'organico')	=> 4

				)
				,'description' 	=> esc_html__('Set items on 0px', 'organico')
				,'group'		=> esc_html__('Responsive Options', 'organico')
			)
		)
) );

/*** FTC Button ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Button', 'organico' ),
	'base' 		=> 'ftc_button',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Text', 'organico' )
			,'param_name' 	=> 'content'
			,'admin_label' 	=> true
			,'value' 		=> 'Button text'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link', 'organico' )
			,'param_name' 	=> 'link'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Text color', 'organico' )
			,'param_name' 	=> 'text_color'
			,'admin_label' 	=> false
			,'value' 		=> '#ffffff'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Text color hover', 'organico' )
			,'param_name' 	=> 'text_color_hover'
			,'admin_label' 	=> false
			,'value' 		=> '#ffffff'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background color', 'organico' )
			,'param_name' 	=> 'bg_color'
			,'admin_label' 	=> false
			,'value' 		=> '#40bea7'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background color hover', 'organico' )
			,'param_name' 	=> 'bg_color_hover'
			,'admin_label' 	=> false
			,'value' 		=> '#3f3f3f'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Border color', 'organico' )
			,'param_name' 	=> 'border_color'
			,'admin_label' 	=> false
			,'value' 		=> '#e8e8e8'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Border color hover', 'organico' )
			,'param_name' 	=> 'border_color_hover'
			,'admin_label' 	=> false
			,'value' 		=> '#40bea7'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Border width', 'organico' )
			,'param_name' 	=> 'border_width'
			,'admin_label' 	=> false
			,'value' 		=> '0'
			,'description' 	=> esc_html__('In pixels. Ex: 1', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'organico' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Self', 'organico')				=> '_self'
				,esc_html__('New Window Tab', 'organico')	=> '_blank'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Size', 'organico' )
			,'param_name' 	=> 'size'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Small', 'organico')		=> 'small'
				,esc_html__('Medium', 'organico')	=> 'medium'
				,esc_html__('Large', 'organico')		=> 'large'
				,esc_html__('X-Large', 'organico')	=> 'x-large'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'iconpicker'
			,'heading' 		=> esc_html__( 'Font icon', 'organico' )
			,'param_name' 	=> 'font_icon'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'settings' 	=> array(
				'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
				,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
			)
			,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show popup', 'organico' )
			,'param_name' 	=> 'popup'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Popup Options', 'organico')
		)
		,array(
			'type' 			=> 'textarea_raw_html'
			,'heading' 		=> esc_html__( 'Popup content', 'organico' )
			,'param_name' 	=> 'popup_content'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
			,'group'		=> esc_html__('Popup Options', 'organico')
		)
	)
) );

/*** FTC Image Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Image Slider', 'organico' ),
	'base' 		=> 'ftc_image_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Image Slider 1', 'organico' )
			,'param_name' 	=> 'img_1'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> 'Set image slider 1'
		)
		,array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Image Slider 2', 'organico' )
			,'param_name' 	=> 'img_2'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> 'Set image slider 2'
		)
		,array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Image Slider 3', 'organico' )
			,'param_name' 	=> 'img_3'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> 'Set image slider 3'
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Image 1', 'organico' )
			,'param_name' 	=> 'link_1'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
		)			
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title Image 1', 'organico' )
			,'param_name' 	=> 'link_title_1'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link_image_2', 'organico' )
			,'param_name' 	=> 'link_2'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
		)						
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title Image 2', 'organico' )
			,'param_name' 	=> 'link_title_2'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link_image_3', 'organico' )
			,'param_name' 	=> 'link_3'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
		)						
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title Image 3', 'organico' )
			,'param_name' 	=> 'link_title_3'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'organico' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('New Window Tab', 'organico')		=> '_blank'
				,esc_html__('Self', 'organico')				=> '_self'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image Size', 'organico' )
			,'param_name' 	=> 'img_size'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'organico' )
		)

	)
) );

/*** FTC Single Image ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Single Image', 'organico' ),
	'base' 		=> 'ftc_single_image',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Image', 'organico' )
			,'param_name' 	=> 'img_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image Size', 'organico' )
			,'param_name' 	=> 'img_size'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image URL', 'organico' )
			,'param_name' 	=> 'img_url'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('Input external URL instead of image from library', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link', 'organico' )
			,'param_name' 	=> 'link'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title', 'organico' )
			,'param_name' 	=> 'link_title'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Hover Effect', 'organico' )
			,'param_name' 	=> 'style_smooth'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Effect-Image Left Right', 'organico')		=> 'smooth-image'
				,esc_html__('Effect Border Image', 'organico')				=> 'smooth-border-image'
				,esc_html__('Effect Background Image', 'organico')		=> 'smooth-background-image'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'organico' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('New Window Tab', 'organico')		=> '_blank'
				,esc_html__('Self', 'organico')				=> '_self'
			)
			,'description' 	=> ''
		)
	)
) );

/*** FTC Heading ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Heading', 'organico' ),
	'base' 		=> 'ftc_heading',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Heading style', 'organico' )
			,'param_name' 	=> 'style'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Style 1', 'organico')		=> 'style-1'
				,esc_html__('Style 2', 'organico')		=> 'style-2'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Heading Size', 'organico' )
			,'param_name' 	=> 'size'
			,'admin_label' 	=> true
			,'value' 		=> array(
				'1'				=> '1'
				,'2'			=> '2'
				,'3'			=> '3'
				,'4'			=> '4'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Text', 'organico' )
			,'param_name' 	=> 'text'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
	)
) );

/*** FTC Banner ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Banner', 'organico' ),
	'base' 		=> 'ftc_banner',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Background Image', 'organico' )
			,'param_name' 	=> 'bg_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Background Url', 'organico' )
			,'param_name' 	=> 'bg_url'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('Input external URL instead of image from library', 'organico')
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background Color', 'organico' )
			,'param_name' 	=> 'bg_color'
			,'admin_label' 	=> false
			,'value' 		=> '#ffffff'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textarea_html'
			,'heading' 		=> esc_html__( 'Banner content', 'organico' )
			,'param_name' 	=> 'content'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Position Banner Content', 'organico' )
			,'param_name' 	=> 'position_content'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Left Top', 'organico')			=>  'left-top'
				,esc_html__('Left Bottom', 'organico')		=>  'left-bottom'
				,esc_html__('Left Center', 'organico')		=>  'left-center'
				,esc_html__('Right Top', 'organico')			=>  'right-top'
				,esc_html__('Right Bottom', 'organico')		=>  'right-bottom'
				,esc_html__('Right Center', 'organico')		=>  'right-center'
				,esc_html__('Center Top', 'organico')		=>  'center-top'
				,esc_html__('Center Bottom', 'organico')		=>  'center-bottom'
				,esc_html__('Center Center', 'organico')		=>  'center-center'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link', 'organico' )
			,'param_name' 	=> 'link'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title', 'organico' )
			,'param_name' 	=> 'link_title'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Style Effect', 'organico' )
			,'param_name' 	=> 'style_smooth'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Background Scale', 'organico')						=>  'ftc-smooth'
				,esc_html__('Background Scale Opacity', 'organico')				=>  'ftc-smooth-opacity'
				,esc_html__('Background Scale Dark', 'organico')					=>	'ftc-smooth-dark'
				,esc_html__('Background Scale and Line', 'organico')				=>  'ftc-smooth-and-line'
				,esc_html__('Background Scale Opacity and Line', 'organico')		=>  'ftc-smooth-opacity-line'
				,esc_html__('Background Scale Dark and Line', 'organico')		=>  'ftc-smooth-dark-line'
				,esc_html__('Background Opacity and Line', 'organico')			=>	'background-opacity-and-line'
				,esc_html__('Background Dark and Line', 'organico')				=>	'background-dark-and-line'
				,esc_html__('Background Opacity', 'organico')					=>	'background-opacity'
				,esc_html__('Background Dark', 'organico')						=>	'background-dark'
				,esc_html__('Line', 'organico')									=>	'eff-line'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Background Opacity On Device', 'organico' )
			,'param_name' 	=> 'opacity_bg_device'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')			=>  0
				,esc_html__('Yes', 'organico')		=>  1
			)
			,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Responsive size', 'organico' )
			,'param_name' 	=> 'responsive_size'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')		=>  1
				,esc_html__('No', 'organico')		=>  0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'organico' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('New Window Tab', 'organico')	=>  '_blank'
				,esc_html__('Self', 'organico')			=>  '_self'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Extra Class', 'organico' )
			,'param_name' 	=> 'extra_class'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'organico')
		)
	)
) );

/* FTC Testimonial */
vc_map( array(
	'name' 		=> esc_html__( 'FTC Testimonial', 'organico' ),
	'base' 		=> 'ftc_testimonial',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'ftc_category'
			,'heading' 		=> esc_html__( 'Categories', 'organico' )
			,'param_name' 	=> 'categories'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			,'class'		=> 'ftc_testimonial'
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Testimonial Style', 'organico' )
			,'param_name' 	=> 'style'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Default', 'organico')		=> ''
				,esc_html__('Version Home 3', 'organico')		=> 'test-2 ftc-testimonial-h3'
				,esc_html__('Version Home 5', 'organico')		=> 'test-2 test-home5'
				,esc_html__('Version Home 10', 'organico')		=> 'testimonial-h10'
				,esc_html__('Version Home 11', 'organico')		=> 'test-home11'
				,esc_html__('Version Home 14', 'organico')		=> 'test-2 test-home5 testi-home14'
				,esc_html__('Version Home 15', 'organico')		=> 'test-2 test-home5 testi-home14 testi-home15'
				,esc_html__('Version Home 21', 'organico')		=> 'test-home5 test-home21'
				,esc_html__('Version Home 22', 'organico')		=> 'test-home5 test-home21 test-home22'
				,esc_html__('Version Home 23', 'organico')		=> 'blog-test-h23'
				,esc_html__('Version About 2', 'organico')		=> 'testimonial-h10 testimonial-about2'
			)
			,'description' 	=> esc_html__( 'Select Style of Testimonial', 'organico' )
		)
		,array(
			'type' 			=> 'textarea'
			,'heading' 		=> esc_html__( 'Testimonial IDs', 'organico' )
			,'param_name' 	=> 'ids'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show Avatar', 'organico' )
			,'param_name' 	=> 'show_avatar'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> '4'
			,'description' 	=> esc_html__('Number of Posts', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Number of words in excerpt', 'organico' )
			,'param_name' 	=> 'excerpt_words'
			,'admin_label' 	=> true
			,'value' 		=> '300'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Text Color Style', 'organico' )
			,'param_name' 	=> 'text_color_style'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Default', 'organico')	=> 'text-default'
				,esc_html__('Light', 'organico')		=> 'text-light'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show in a carousel slider', 'organico' )
			,'param_name' 	=> 'is_slider'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> '1'
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'organico' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> true
			,'value' 		=> '30'
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show pagination dots', 'organico' )
			,'param_name' 	=> 'show_dots'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'organico')
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'organico' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
	)
) );

/*** FTC Brands Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Brands Slider', 'organico' ),
	'base' 		=> 'ftc_brands_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Style Brand', 'organico' )
			,'param_name' 	=> 'style_brand'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Default', 'organico')	=> 'style-default'
				,esc_html__('Light', 'organico')		=> 'style-light'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> '7'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Rows', 'organico' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Number of Rows', 'organico' )
		)
		,array(
			'type' 			=> 'ftc_category'
			,'heading' 		=> esc_html__( 'Categories', 'organico' )
			,'param_name' 	=> 'categories'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			,'class'		=> 'ftc_brand'
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'organico' )
			,'param_name' 	=> 'margin_image'
			,'admin_label' 	=> false
			,'value' 		=> '32'
			,'description' 	=> esc_html__('Set margin between items', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Activate link', 'organico' )
			,'param_name' 	=> 'active_link'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'organico' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)

		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Desktop small items', 'organico' )
			,'param_name' 	=> 'desksmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4
				,esc_html__('5', 'organico')	=> 5
				,esc_html__('6', 'organico')	=> 6

			)
			,'description' 	=> esc_html__('Set items on 991px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet items', 'organico' )
			,'param_name' 	=> 'tablet_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 768px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet mini items', 'organico' )
			,'param_name' 	=> 'tabletmini_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 640px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile items', 'organico' )
			,'param_name' 	=> 'mobile_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 480px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile small items', 'organico' )
			,'param_name' 	=> 'mobilesmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 0px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
	)
) );


/*** FTC Google Map ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Google Map', 'organico' ),
	'base' 		=> 'ftc_google_map',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Address', 'organico' )
			,'param_name' 	=> 'address'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Height', 'organico' )
			,'param_name' 	=> 'height'
			,'admin_label' 	=> true
			,'value' 		=> 360
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Zoom', 'organico' )
			,'param_name' 	=> 'zoom'
			,'admin_label' 	=> true
			,'value' 		=> 12
			,'description' 	=> esc_html__('Input a number between 0 and 22', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Map Type', 'organico' )
			,'param_name' 	=> 'map_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('ROADMAP', 'organico')		=> 'ROADMAP'
				,esc_html__('SATELLITE', 'organico')		=> 'SATELLITE'
				,esc_html__('HYBRID', 'organico')		=> 'HYBRID'
				,esc_html__('TERRAIN', 'organico')		=> 'TERRAIN'
			)
			,'description' 	=> ''
		)
	)
) );

/*** FTC Countdown ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Countdown', 'organico' ),
	'base' 		=> 'ftc_countdown',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Day', 'organico' )
			,'param_name' 	=> 'day'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Month', 'organico' )
			,'param_name' 	=> 'month'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Year', 'organico' )
			,'param_name' 	=> 'year'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Text Color Style', 'organico' )
			,'param_name' 	=> 'text_color_style'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Default', 'organico')	=> 'text-default'
				,esc_html__('Light', 'organico')		=> 'text-light'
			)
			,'description' 	=> ''
		)
	)
) );

/*** FTC Feedburner Subscription ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'organico' ),
	'base' 		=> 'ftc_feedburner_subscription',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Feedburner ID', 'organico' )
			,'param_name' 	=> 'feedburner_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> 'Newsletter'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Intro Text Line 1', 'organico' )
			,'param_name' 	=> 'intro_text'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Button Text', 'organico' )
			,'param_name' 	=> 'button_text'
			,'admin_label' 	=> true
			,'value' 		=> 'Subscribe'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Placeholder Text', 'organico' )
			,'param_name' 	=> 'placeholder_text'
			,'admin_label' 	=> true
			,'value' 		=> 'Enter your email address'
			,'description' 	=> ''
		)
	)
) );

/********************** FTC Product Shortcodes ************************/

/*** FTC Products ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Products', 'organico' ),
	'base' 		=> 'ftc_products',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'organico' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'organico')		=> 'recent'
				,esc_html__('Sale', 'organico')		=> 'sale'
				,esc_html__('Featured', 'organico')	=> 'featured'
				,esc_html__('Best Selling', 'organico')	=> 'best_selling'
				,esc_html__('Top Rated', 'organico')	=> 'top_rated'
				,esc_html__('Mixed Order', 'organico')	=> 'mixed_order'
			)
			,'description' 	=> esc_html__( 'Select type of product', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Custom order', 'organico' )
			,'param_name' 	=> 'custom_order'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')			=> 0
				,esc_html__('Yes', 'organico')		=> 1
			)
			,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'organico' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'organico')				=> 'none'
				,esc_html__('ID', 'organico')				=> 'ID'
				,esc_html__('Date', 'organico')				=> 'date'
				,esc_html__('Name', 'organico')				=> 'name'
				,esc_html__('Title', 'organico')				=> 'title'
				,esc_html__('Comment count', 'organico')		=> 'comment_count'
				,esc_html__('Random', 'organico')			=> 'rand'
			)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'organico' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'organico')		=> 'DESC'
				,esc_html__('Ascending', 'organico')		=> 'ASC'
			)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Columns', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Products', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'organico' )
			,'param_name' 	=> 'product_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product IDs', 'organico' )
			,'param_name' 	=> 'ids'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> esc_html__('Enter product name or slug to search', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Meta position', 'organico' )
			,'param_name' 	=> 'meta_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom', 'organico')			=> 'bottom'
				,esc_html__('On Thumbnail', 'organico')	=> 'on-thumbnail'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'organico' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'organico' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'organico' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'organico' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'organico' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'organico' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'organico' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'organico' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		, array(
			'type' => 'dropdown'
			, 'heading' => esc_html__('Show load more button', 'organico')
			, 'param_name' => 'show_load_more'
			, 'admin_label' => false
			, 'value' => array(
				esc_html__('No', 'organico') => 0
				, esc_html__('Yes', 'organico') => 1
			)
			, 'description' => ''
		)
		, array(
			'type' => 'textfield'
			, 'heading' => esc_html__('Load more text', 'organico')
			, 'param_name' => 'load_more_text'
			, 'admin_label' => true
			, 'value' => 'Show more'
			, 'description' => ''
		)
	)
) );

/*** FTC Products Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Products Slider', 'organico' ),
	'base' 		=> 'ftc_products_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'organico' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'organico')		=> 'recent'
				,esc_html__('Sale', 'organico')		=> 'sale'
				,esc_html__('Featured', 'organico')	=> 'featured'
				,esc_html__('Best Selling', 'organico')	=> 'best_selling'
				,esc_html__('Top Rated', 'organico')	=> 'top_rated'
				,esc_html__('Mixed Order', 'organico')	=> 'mixed_order'
			)
			,'description' 	=> esc_html__( 'Select type of product', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product Style', 'organico' )
			,'param_name' 	=> 'style'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Default', 'organico')		=> ''
				,esc_html__('Version Home 5', 'organico')		=> 'slider-product-5'
				,esc_html__('Version Home 6', 'organico')	=> 'slider-product-6'
				,esc_html__('Version Home 8', 'organico')	=> 'slider-product-5 slider-product-8'
				,esc_html__('Version Home 9', 'organico')	=> 'product-sl-h9'
				,esc_html__('Version Home 9_2', 'organico')	=> 'slider-product-5 slider-home9'
				,esc_html__('Version Home 10', 'organico')	=> 'slider-product-10'
				,esc_html__('Version Home 11', 'organico')	=> 'slider-product-5 product-home11'
				,esc_html__('Version Home 12', 'organico')	=> 'slider-product-10 slider-product-12'
				,esc_html__('Version Home 14', 'organico')	=> 'slider-product14'
				,esc_html__('Version Home 14_2', 'organico')	=> 'slider-h14'
				,esc_html__('Version Home 16', 'organico')	=> 'product-home16'
				,esc_html__('Version Home 16_2', 'organico')	=> 'widget-home16'
				,esc_html__('Version Home 17', 'organico')	=> 'slider-h14 slider-h17'
				,esc_html__('Version Home 19', 'organico')	=> 'slider-product-10 slider-product-12 slider-product-19'
				,esc_html__('Version Home 21', 'organico')	=> 'slider-h17 slider-product-21'
				,esc_html__('Version Home 22', 'organico')	=> 'slider-product-22'
				,esc_html__('Version Home 23', 'organico')	=> 'slider-home23'
			)
			,'description' 	=> esc_html__( 'Select Style of product', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Custom order', 'organico' )
			,'param_name' 	=> 'custom_order'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')			=> 0
				,esc_html__('Yes', 'organico')		=> 1
			)
			,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'organico' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'organico')				=> 'none'
				,esc_html__('ID', 'organico')				=> 'ID'
				,esc_html__('Date', 'organico')				=> 'date'
				,esc_html__('Name', 'organico')				=> 'name'
				,esc_html__('Title', 'organico')				=> 'title'
				,esc_html__('Comment count', 'organico')		=> 'comment_count'
				,esc_html__('Random', 'organico')			=> 'rand'
			)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'organico' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'organico')		=> 'DESC'
				,esc_html__('Ascending', 'organico')		=> 'ASC'
			)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Columns', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Rows', 'organico' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Number of Rows', 'organico' )
		)                    
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Number of Products', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'organico' )
			,'param_name' 	=> 'product_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Meta position', 'organico' )
			,'param_name' 	=> 'meta_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom', 'organico')			=> 'bottom'
				,esc_html__('On Thumbnail', 'organico')	=> 'on-thumbnail'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'organico' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'organico' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'organico' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'organico' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'organico' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'organico' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'organico' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'organico' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show dots button', 'organico' )
			,'param_name' 	=> 'dots'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Position navigation button', 'organico' )
			,'param_name' 	=> 'position_nav'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Top', 'organico')		=> 'nav-top'
				,esc_html__('Bottom', 'organico')	=> 'nav-bottom'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'organico' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> false
			,'value' 		=> '20'
			,'description' 	=> esc_html__('Set margin between items', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Desktop small items', 'organico' )
			,'param_name' 	=> 'desksmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 991px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet items', 'organico' )
			,'param_name' 	=> 'tablet_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 768px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet mini items', 'organico' )
			,'param_name' 	=> 'tabletmini_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 640px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile items', 'organico' )
			,'param_name' 	=> 'mobile_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 480px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile small items', 'organico' )
			,'param_name' 	=> 'mobilesmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 0px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
	)
) );

/*** FTC Products Widget ***/
vc_map( array(
	'name' 			=> esc_html__( 'FTC Products Widget', 'organico' ),
	'base' 			=> 'ftc_products_widget',
	'class' 		=> '',
	'description' 	=> '',
	'category' 		=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 		=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'organico' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'organico')		=> 'recent'
				,esc_html__('Sale', 'organico')		=> 'sale'
				,esc_html__('Featured', 'organico')	=> 'featured'
				,esc_html__('Best Selling', 'organico')	=> 'best_selling'
				,esc_html__('Top Rated', 'organico')	=> 'top_rated'
				,esc_html__('Mixed Order', 'organico')	=> 'mixed_order'
			)
			,'description' 	=> esc_html__( 'Select type of product', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Number of Products', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'organico' )
			,'param_name' 	=> 'product_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'organico' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Thumbnail size', 'organico' )
			,'param_name' 	=> 'thumbnail_size'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('shop_thumbnail', 'organico')		=> 'Product Thumbnails'
				,esc_html__('shop_catalog', 'organico')		=> 'Catalog Images'
				,esc_html__('shop_single', 'organico')	=> 'Single Product Image'
			)
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'organico' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'organico' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'organico' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show in a carousel slider', 'organico' )
			,'param_name' 	=> 'is_slider'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')	=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Row', 'organico' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> false
			,'value' 		=> 3
			,'description' 	=> esc_html__( 'Number of Rows for slider', 'organico' )
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'organico' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'organico')
		)
	)
) );

/*** FTC Product Deals Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Product Deals Slider', 'organico' ),
	'base' 		=> 'ftc_product_deals_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'organico' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'organico')		=> 'recent'
				,esc_html__('Featured', 'organico')	=> 'featured'
				,esc_html__('Best Selling', 'organico')	=> 'best_selling'
				,esc_html__('Top Rated', 'organico')	=> 'top_rated'
				,esc_html__('Mixed Order', 'organico')	=> 'mixed_order'
			)
			,'description' 	=> esc_html__( 'Select type of product', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product Deal Style', 'organico' )
			,'param_name' 	=> 'style'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Default', 'organico')		=> ''
				,esc_html__('Version Home 8', 'organico')		=> 'product-deal-home8'
				,esc_html__('Version Home 9', 'organico')		=> 'slider-product-5 product-deal-h9'
				,esc_html__('Version Home 11', 'organico')		=> 'product-deal-home8 product-deal-h11'
				,esc_html__('Version Home 14', 'organico')		=> 'deal-h14'
				,esc_html__('Version Home 23', 'organico')		=> 'revslider-product23'
			)
			,'description' 	=> esc_html__( 'Select Style of Testimonial', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Item Layout', 'organico' )
			,'param_name' 	=> 'layout'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Grid', 'organico')		=> 'grid'
				,esc_html__('List', 'organico')		=> 'list'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> false
			,'value' 		=> 4
			,'description' 	=> esc_html__( 'Number of Columns', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Products', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'organico' )
			,'param_name' 	=> 'product_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show counter', 'organico' )
			,'param_name' 	=> 'show_counter'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Counter position', 'organico' )
			,'param_name' 	=> 'counter_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom', 'organico')			=> 'bottom'
				,esc_html__('On thumbnail', 'organico')	=> 'on-thumbnail'
			)
			,'description' 	=> ''
			,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'organico' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show gallery list', 'organico' )
			,'param_name' 	=> 'show_gallery'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Gallery position', 'organico' )
			,'param_name' 	=> 'gallery_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom out line', 'organico')	=> 'bottom-out'
				,esc_html__('Bottom in line', 'organico')	=> 'bottom-in'
			)
			,'description' 	=> ''
			,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'organico' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'organico' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'organico' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'organico' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'organico' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'organico' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'organico' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show dots button', 'organico' )
			,'param_name' 	=> 'dots'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'organico' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'organico' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> false
			,'value' 		=> '20'
			,'description' 	=> esc_html__('Set margin between items', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Desktop small items', 'organico' )
			,'param_name' 	=> 'desksmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 991px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet items', 'organico' )
			,'param_name' 	=> 'tablet_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 768px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet mini items', 'organico' )
			,'param_name' 	=> 'tabletmini_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 640px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile items', 'organico' )
			,'param_name' 	=> 'mobile_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 480px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile small items', 'organico' )
			,'param_name' 	=> 'mobilesmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 0px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image Width Size', 'organico' )
			,'param_name' 	=> 'custom_width'
			,'admin_label' 	=> true
			,'description' 	=> esc_html__( 'Width', 'organico' )
		),array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image Height Size', 'organico' )
			,'param_name' 	=> 'custom_height'
			,'admin_label' 	=> true
			,'description' 	=> esc_html__( 'Height', 'organico' )
		)
	)
) );

/*** FTC Product Categories Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Product Categories Slider', 'organico' ),
	'base' 		=> 'ftc_product_categories_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 4
			,'description' 	=> esc_html__( 'Number of Columns', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Rows', 'organico' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Number of Rows', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Product Categories', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Parent', 'organico' )
			,'param_name' 	=> 'parent'
			,'admin_label' 	=> true
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Child Of', 'organico' )
			,'param_name' 	=> 'child_of'
			,'admin_label' 	=> true
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'organico' )
			,'param_name' 	=> 'ids'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> esc_html__('Include these categories', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Hide empty product categories', 'organico' )
			,'param_name' 	=> 'hide_empty'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product category title', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product category discription', 'organico' )
			,'param_name' 	=> 'show_discription'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show dots button', 'organico' )
			,'param_name' 	=> 'dots'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'organico' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'organico' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> false
			,'value' 		=> '0'
			,'description' 	=> esc_html__('Set margin between items', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Desktop small items', 'organico' )
			,'param_name' 	=> 'desksmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 991px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet items', 'organico' )
			,'param_name' 	=> 'tablet_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 768px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Tablet mini items', 'organico' )
			,'param_name' 	=> 'tabletmini_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 640px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile items', 'organico' )
			,'param_name' 	=> 'mobile_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 480px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Mobile small items', 'organico' )
			,'param_name' 	=> 'mobilesmall_items'
			,'admin_label' 	=> false
			,'value' 		=>  array(
				esc_html__('1', 'organico')	=> 1
				,esc_html__('2', 'organico')	=> 2
				,esc_html__('3', 'organico')	=> 3
				,esc_html__('4', 'organico')	=> 4

			)
			,'description' 	=> esc_html__('Set items on 0px', 'organico')
			,'group'		=> esc_html__('Responsive Options', 'organico')
		)
	)
) );


/*** FTC Products In Category Tabs***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Products Category Tabs', 'organico' ),
	'base' 		=> 'ftc_products_category_tabs',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'organico' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'organico')		=> 'recent'
				,esc_html__('Sale', 'organico')		=> 'sale'
				,esc_html__('Featured', 'organico')	=> 'featured'
				,esc_html__('Best Selling', 'organico')	=> 'best_selling'
				,esc_html__('Top Rated', 'organico')	=> 'top_rated'
				,esc_html__('Mixed Order', 'organico')	=> 'mixed_order'
			)
			,'description' 	=> esc_html__( 'Select type of product', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Custom order', 'organico' )
			,'param_name' 	=> 'custom_order'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')			=> 0
				,esc_html__('Yes', 'organico')		=> 1
			)
			,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'organico' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'organico')				=> 'none'
				,esc_html__('ID', 'organico')				=> 'ID'
				,esc_html__('Date', 'organico')				=> 'date'
				,esc_html__('Name', 'organico')				=> 'name'
				,esc_html__('Title', 'organico')				=> 'title'
				,esc_html__('Comment count', 'organico')		=> 'comment_count'
				,esc_html__('Random', 'organico')			=> 'rand'
			)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'organico' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'organico')		=> 'DESC'
				,esc_html__('Ascending', 'organico')		=> 'ASC'
			)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background Color', 'organico' )
			,'param_name' 	=> 'bg_color'
			,'admin_label' 	=> false
			,'value' 		=> '#f7f6f4'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'organico' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 3
			,'description' 	=> esc_html__( 'Number of Columns', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'organico' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Number of Products', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'organico' )
			,'param_name' 	=> 'product_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Parent Category', 'organico' )
			,'param_name' 	=> 'parent_cat'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> false
				,'unique_values' 	=> true
			)
			,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Include children', 'organico' )
			,'param_name' 	=> 'include_children'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')			=> 0
				,esc_html__('Yes', 'organico')		=> 1
			)
			,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'organico' )
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Active tab', 'organico' )
			,'param_name' 	=> 'active_tab'
			,'admin_label' 	=> false
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Enter active tab number', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'organico' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'organico' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'organico' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'organico' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'organico' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'organico' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'organico' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'organico' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'organico' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show counter', 'organico' )
			,'param_name' 	=> 'show_counter'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show in a carousel slider', 'organico' )
			,'param_name' 	=> 'is_slider'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Rows', 'organico' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> array(
				'1'			=> '1'
				,'2'		=> '2'
			)
			,'description' 	=> esc_html__( 'Number of Rows in slider', 'organico' )
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'organico' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'organico')		=> 0
				,esc_html__('Yes', 'organico')	=> 1
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'organico' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
	)
) );

/*** FTC List Of Product Categories ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC List Of Product Categories', 'organico' ),
	'base' 		=> 'ftc_list_of_product_categories',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'organico' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Background image', 'organico' )
			,'param_name' 	=> 'bg_image'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Hover Image Effect', 'organico' )
			,'param_name' 	=> 'style_smooth'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No Effect', 'organico')		=> 'no-smooth'
				,esc_html__('Effect-Image Left Right', 'organico')		=> 'smooth-image'
				,esc_html__('Effect Border Image', 'organico')				=> 'smooth-border-image'
				,esc_html__('Effect Background Image', 'organico')		=> 'smooth-background-image'
				,esc_html__('Effect Background Top Image', 'organico')	=> 'smooth-top-image'
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Category', 'organico' )
			,'param_name' 	=> 'product_cat'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> false
				,'unique_values' 	=> true
			)
			,'description' 	=> esc_html__('Display sub categories of this category', 'organico')
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Include parent category in list', 'organico' )
			,'param_name' 	=> 'include_parent'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'organico')	=> 1
				,esc_html__('No', 'organico')	=> 0
			)
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Number of Sub Categories', 'organico' )
			,'param_name' 	=> 'limit_sub_cat'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Leave blank to show all', 'organico' )
		)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Include these categories', 'organico' )
			,'param_name' 	=> 'include_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
			)
			,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'organico')
		)
	)
) );


/*** FTC Milestone ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Milestone', 'organico' ),
	'base' 		=> 'ftc_milestone',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Number', 'organico' )
			,'param_name' 	=> 'number'
			,'admin_label' 	=> true
			,'value' 		=> '0'
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Subject', 'organico' )
			,'param_name' 	=> 'ftc_number_meta'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
		)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Text Color Style', 'organico' )
			,'param_name' 	=> 'text_color_style'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Default', 'organico')	=> 'text-default'
				,esc_html__('Light', 'organico')		=> 'text-light'
			)
			,'description' 	=> ''
		)
	)
) );

}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('ftc_category', 'ftc_product_catgories_shortcode_param');
if( !function_exists('ftc_product_catgories_shortcode_param') ){
	function ftc_product_catgories_shortcode_param($settings, $value){
		$categories = ftc_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ftc-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
						<li>
							<label>
								<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
								<?php echo esc_html($cat->name); ?>
							</label>
							<?php ftc_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.ftc-select-category').on('change', function(){
				"use strict";
				
				var selected = jQuery('.ftc-select-category:checked');
				jQuery('.ftc-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.ftc-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('ftc_get_list_categories_shortcode_param') ){
	function ftc_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'ftc_testimonial' ){
				$taxonomy = 'ftc_testimonial_cat';
			}
			if( $settings['class'] == 'ftc_portfolio' ){
				$taxonomy = 'ftc_portfolio_cat';
			}
			if( $settings['class'] == 'ftc_brand' ){
				$taxonomy = 'ftc_brand_cat';
			}
		}
		
		$args = array(
			'taxonomy' 			=> $taxonomy
			,'hierarchical'		=> 1
			,'hide_empty'		=> 0
			,'parent'			=> $cat_parent_id
			,'title_li'			=> ''
			,'child_of'			=> 0
		);
		$cats = get_categories($args);
		return $cats;
	}
}

if( !function_exists('ftc_get_list_sub_categories_shortcode_param') ){
	function ftc_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = ftc_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
			?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_ftc_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ftc_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('ftc_products', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('ftc_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'ids');

	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>