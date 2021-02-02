<?php

/**
* FTC Theme Options
*/

if (!class_exists('Redux_Framework_smof_data')) {

    class Redux_Framework_smof_data {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

// This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }

        public function initSettings() {

            $this->theme = wp_get_theme();

// Set the default arguments
            $this->setArguments();
// Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

// Create the sections and fields
            $this->setSections();

if (!isset($this->args['opt_name'])) { // No errors please
    return;
}

$this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
}

function compiler_action($options, $css, $changed_values) {

}

function dynamic_section($sections) {

    return $sections;
}

function change_arguments($args) {

    return $args;
}

function change_defaults($defaults) {

    return $defaults;
}

function remove_demo() {

}

public function setSections() {

    /* Default Sidebar */
    global $ftc_default_sidebars;
    $of_sidebars    = array();
    if( $ftc_default_sidebars ){
        foreach( $ftc_default_sidebars as $key => $_sidebar ){
            $of_sidebars[$_sidebar['id']] = $_sidebar['name'];
        }
    }
    $ftc_layouts = array(
        '0-1-0'     => get_template_directory_uri(). '/admin/images/1col.png'
        ,'0-1-1'    => get_template_directory_uri(). '/admin/images/2cr.png'
        ,'1-1-0'    => get_template_directory_uri(). '/admin/images/2cl.png'
        ,'1-1-1'    => get_template_directory_uri(). '/admin/images/3cm.png'
    );

    /***************************/ 
    /***   General Options   ***/
    /***************************/
    /* Cookie Notice */
    $this->sections[] = array(
        'icon' => 'el el-facetime-video',
        'icon_class' => 'icon',
        'title' => esc_html__('Cookie Notice', 'organico'),
        'fields' => array(
            array (
                'id'       => 'cookies_info',
                'type'     => 'switch',
                'title'    => esc_html__('Show cookies info', 'organico'),
                'subtitle' => esc_html__('Under EU privacy regulations, websites must make it clear to visitors what information about them is being stored. This specifically includes cookies. Turn on this option and user will see info box at the bottom of the page that your web-site is using cookies.', 'organico'),
                'default' => true
            ),
            array (
                'id' => 'cookies_title',
                'type' => 'editor',
                'title' => esc_html__('Title text', 'organico'),
                'subtitle' => esc_html__('Title of Cookies', 'organico'),
                'default' => esc_html__('Cookies Notice', 'organico'),
            ),
            array (
                'id'       => 'cookies_text',
                'type'     => 'editor',
                'title'    => esc_html__('Popup text', 'organico'),
                'subtitle' => esc_html__('Place here some information about cookies usage that will be shown in the popup.', 'organico'),
                'default' => esc_html__('We use cookies to improve your experience on our website. By browsing this website, you agree to our use of cookies.', 'organico'),
            ),

            array (
                'id'       => 'cookies_version',
                'type'     => 'text',
                'title'    => esc_html__('Cookies version', 'organico'),
                'subtitle' => esc_html__('If you change your cookie policy information you can increase their version to show the popup to all visitors again.', 'organico'),
                'default' => 1,
            ),				
        )
    );
    $this->sections[] = array(
        'icon' => 'fa fa-home',
        'icon_class' => 'icon',
        'title' => esc_html__('General', 'organico'),
        'fields' => array(				
        )
    );	 

    /** Logo - Favicon **/
    $this->sections[] = array(
        'icon' => 'icofont icofont-double-right',
        'icon_class' => 'icon',
        'subsection' => true,
        'title' => esc_html__('Logo - Favicon', 'organico'),
        'fields' => array(			
            array(
                'id'=>'ftc_logo',
                'type' => 'media',
                'compiler'  => 'true',
                'mode'      => false,
                'title' => esc_html__('Logo Image', 'organico'),
                'desc'      => esc_html__('Select an image file for the main logo', 'organico'),
                'default' => array(
                    'url' => get_template_directory_uri(). '/assets/images/logo.png'
                )
            )	,
            array(
                'id'=>'ftc_logo_mobile',
                'type' => 'media',
                'compiler'  => 'true',
                'mode'      => false,
                'title' => esc_html__('Logo Mobile Image', 'organico'),
                'desc'      => '',
                'default' => array(
                    'url' => get_template_directory_uri(). '/assets/images/logo_mobile.png'
                )
            )			
            ,array(
                'id'=>'ftc_favicon',
                'type' => 'media',
                'compiler'  => 'true',
                'mode'      => false,
                'title' => esc_html__('Favicon Image', 'organico'),
                'desc'      => esc_html__('Accept ICO files', 'organico'),
                'default' => array(
                    'url' => get_template_directory_uri(). '/assets/images/favicon.ico'
                )
            )
            ,array(
                'id'=>'ftc_text_logo',
                'type' => 'text',
                'title' => esc_html__('Text Logo', 'organico'),
                'default' => 'Organico'
            )				
        )
    );
    /* Popup Newletter */
    $this->sections[] = array(
        'icon' => 'icofont icofont-double-right',
        'icon_class' => 'icon',
        'subsection' => true,
        'title' => esc_html__('Popup Newletter', 'organico'),
        'fields' => array(                    
            array(
                'id'=>'ftc_enable_popup',
                'type' => 'switch',
                'title' => esc_html__('Enable Popup Newletter', 'organico'),
                'desc'     => '',
                'on' => esc_html__('Yes', 'organico'),
                'off' => esc_html__('No', 'organico'),
                'default' => 1,
            ),
            array(
                'id'=>'ftc_bg_popup_image',
                'type' => 'media',
                'title' => esc_html__('Popup Newletter Background Image', 'organico'),
                'desc'     => esc_html__("Select a new image to override current background image", "organico"),
                'default'   =>array(
                    'url' => get_template_directory_uri(). '/assets/images/popup.jpg'
                )
            ),    
            array( 
                'title' => esc_html__('Single Portfolio Full', 'organico')
                ,'desc' => ''
                ,'id' => 'ftc_port_single_style'
                ,'default' => 1
                ,'type' => 'switch'
            ),		
        )
    );
    /** Header Options **/
    $this->sections[] = array(
        'icon' => 'icofont icofont-double-right',
        'icon_class' => 'icon',
        'subsection' => true,
        'title' => esc_html__('Header of inner Pages', 'organico'),
        'fields' => array(	
            array(
                'id'=>'ftc_header_layout',
                'type' => 'image_select',
                'full_width' => true,
                'title' => esc_html__('Header Layout', 'organico'),
                'subtitle' => esc_html__('This header style will be showed only in inner pages, please go to Pages > Homepage to change header for front page.', 'organico'),
                'options' => array(
                    'layout1'   => get_template_directory_uri() . '/admin/images/header/layout2.jpg'
                    ,'layout2'  => get_template_directory_uri() . '/admin/images/header/layout1.jpg'
                    ,'layout5'  => get_template_directory_uri() . '/admin/images/header/layout3.jpg'
                    ,'layout7'  => get_template_directory_uri() . '/admin/images/header/layout4.jpg'
                    ,'layout8'  => get_template_directory_uri() . '/admin/images/header/layout5.jpg'
                    ,'layout11'  => get_template_directory_uri() . '/admin/images/header/layout6.jpg'
                    ,'layout12'  => get_template_directory_uri() . '/admin/images/header/layout7.jpg'
                    ,'layout14'  => get_template_directory_uri() . '/admin/images/header/layout8.jpg'
                    ,'layout15'  => get_template_directory_uri() . '/admin/images/header/layout9.jpg'
                    ,'layout16'  => get_template_directory_uri() . '/admin/images/header/layout10.jpg'
                    ,'layout17'  => get_template_directory_uri() . '/admin/images/header/layout11.jpg'
                    ,'layout18'  => get_template_directory_uri() . '/admin/images/header/layout12.jpg'
                    ,'layout19'  => get_template_directory_uri() . '/admin/images/header/layout13.jpg'
                    ,'layout20'  => get_template_directory_uri() . '/admin/images/header/layout14.jpg'
                    ,'layout21'  => get_template_directory_uri() . '/admin/images/header/layout15.jpg'
                    ,'layout22'  => get_template_directory_uri() . '/admin/images/header/layout16.jpg'
                    ,'layout23'  => get_template_directory_uri() . '/admin/images/header/layout17.jpg'
                    ,'layout24'  => get_template_directory_uri() . '/admin/images/header/layout18.jpg'
                    ,'layout25'  => get_template_directory_uri() . '/admin/images/header/layout19.jpg'
                    ,'layout26'  => get_template_directory_uri() . '/admin/images/header/layout20.jpg'
                    ,'layout27'  => get_template_directory_uri() . '/admin/images/header/layout21.jpg'
                    ,'layout28'  => get_template_directory_uri() . '/admin/images/header/layout22.jpg'
                    ,'layout29'  => get_template_directory_uri() . '/admin/images/header/layout22.jpg'
                    ,'layout30'  => get_template_directory_uri() . '/admin/images/header/layout30.jpg'
                    ,'layout31'  => get_template_directory_uri() . '/admin/images/header/layout31.jpg'
                    ,'layout32'  => get_template_directory_uri() . '/admin/images/header/layout32.jpg'
                    ,'layout33'  => get_template_directory_uri() . '/admin/images/header/layout33.jpg'
                    ,'layout34'  => get_template_directory_uri() . '/admin/images/header/layout34.jpg'
                    ,'layout35'  => get_template_directory_uri() . '/admin/images/header/layout35.jpg'
                    ,'layout36'  => get_template_directory_uri() . '/admin/images/header/layout36.jpg'
                    ,'layout37'  => get_template_directory_uri() . '/admin/images/header/layout37.jpg'
                    ,'layout38'  => get_template_directory_uri() . '/admin/images/header/layout38.jpg'
                ),
                'default' => 'layout1'
            ),
            array(
                'id'=>'ftc_header_contact_information',
                'type' => 'textarea',
                'title' => esc_html__('Header nav Information', 'organico'),
                'default' => '',
            ),					
            array(
                'id'=>'ftc_middle_header_content',
                'type' => 'textarea',
                'title' => esc_html__('Header Content - Information', 'organico'),
                'default' => '',
            ),
            array(
                'id'=>'ftc_bottom_header_content',
                'type' => 'textarea',
                'title' => esc_html__('Header Information Extra', 'organico'),
                'default' => '',
            ),
            array(
                'id'=>'ftc_header_content2',
                'type' => 'textarea',
                'title' => esc_html__('Header Information 2', 'organico'),
                'default' => '',
            ),          
            array(
                'id'=>'ftc_header_content3',
                'type' => 'textarea',
                'title' => esc_html__('Copyright Header', 'organico'),
                'default' => '',
            ),
            array(   
                "title"     => esc_html__("Header Sticky", "organico"),
                "desc"     => esc_html__("Add header sticky. Please disable sticky mega main menu", "organico"),
                "id"       => "ftc_enable_sticky_header",
                'default' => 1,
                "on"       => esc_html__("Enable", "organico"),
                "off"      => esc_html__("Disable", "organico"),
                "type"     => "switch",
            ),
            array(
                'id'=>'ftc_mobile_layout',
                'type' => 'switch',
                'title' => esc_html__('Mobile Layout', 'organico'),
                'default' => 1,
                'on' => esc_html__('Enable', 'organico'),
                'off' => esc_html__('Disable', 'organico'),
            ),
            array(
                'id'=>'ftc_mobile_menu',
                'type' => 'switch',
                'title' => esc_html__('Menu Mobile Layout', 'organico'),
                'default' => 1,
                'on' => esc_html__('Enable', 'organico'),
                'off' => esc_html__('Disable', 'organico'),
            ),
            array(
                'id'=>'ftc_header_currency',
                'type' => 'switch',
                'title' => esc_html__('Header Currency', 'organico'),
                'default' => 1,
                'on' => esc_html__('Enable', 'organico'),
                'off' => esc_html__('Disable', 'organico'),
            ),
            array(
                'id'=>'ftc_header_language',
                'type' => 'switch',
                'title' => esc_html__('Header Language', 'organico'),
                'desc'     => esc_html__("If you don't install WPML plugin, it will display demo html", "organico"),
                'on' => esc_html__('Yes', 'organico'),
                'off' => esc_html__('No', 'organico'),
                'default' => 1,
            ),
            array(
                'id'=>'ftc_enable_tiny_shopping_cart',
                'type' => 'switch',
                'title' => esc_html__('Shopping Cart', 'organico'),
                'on' => esc_html__('Yes', 'organico'),
                'off' => esc_html__('No', 'organico'),
                'default' => 1,
            ),
            array(
                'id' => 'ftc_cart_layout', 
                'type' => 'select',
                'title' => esc_html__('Cart Layout', 'organico'),
                'options' => array(
                    'dropdown' => esc_html__('Dropdown', 'organico') ,
                    'off-canvas'    => esc_html__('Off Canvas', 'organico') ,
                ),
                'default' => 'off-canvas',

            ),
            array(
                'id'=>'ftc_enable_search',
                'type' => 'switch',
                'title' => esc_html__('Search Bar', 'organico'),
                'on' => esc_html__('Yes', 'organico'),
                'off' => esc_html__('No', 'organico'),
                'default' => 1,
            ),
            array(
                'id'=>'ftc_enable_tiny_account',
                'type' => 'switch',
                'title' => esc_html__('My Account', 'organico'),
                'on' => esc_html__('Yes', 'organico'),
                'off' => esc_html__('No', 'organico'),
                'default' => 1,
            ),
            array(
                'id'=>'ftc_enable_tiny_wishlist',
                'type' => 'switch',
                'title' => esc_html__('Wishlist', 'organico'),
                'on' => esc_html__('Yes', 'organico'),
                'off' => esc_html__('No', 'organico'),
                'default' => 1,
            ),
            array(   "title"      => esc_html__("Check out", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_enable_tiny_checkout"
                ,"default"      => "1"
                ,"on"       => esc_html__("Enable", "organico")
                ,"off"      => esc_html__("Disable", "organico")
                ,"type"     => "switch"
            )
        )
);	

$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Breadcrumb', 'organico'),
    'fields' => array(
        array(
            'id'=>'ftc_bg_breadcrumbs',
            'type' => 'media',
            'title' => esc_html__('Breadcrumbs Background Image', 'organico'),
            'desc'     => esc_html__("Select a new image to override current background image", "organico"),
            'default'   =>array(
                'url' => get_template_directory_uri(). '/assets/images/banner-shop.jpg'
            )
        ),
        array(
            'id'=>'ftc_enable_breadcrumb_background_image',
            'type' => 'switch',
            'title' => esc_html__('Enable Breadcrumb Background Image', 'organico'),
            'desc'     => esc_html__("You can set background color by going to Color Scheme tab > Breadcrumb Colors section", "organico"),
            'on' => esc_html__('Yes', 'organico'),
            'off' => esc_html__('No', 'organico'),
            'default' => 1,
        ),                   
    )
);

/** Back top top **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Back to top', 'organico'),
    'fields' => array(
        array(
            'id'=>'ftc_back_to_top_button',
            'type' => 'switch',
            'title' => esc_html__('Enable Back To Top Button', 'organico'),
            'default' => true,
            'on' => esc_html__('Yes', 'organico'),
            'off' => esc_html__('No', 'organico'),
        )  
        ,array(
            'id'=>'ftc_back_to_top_button_on_mobile',
            'type' => 'switch',
            'title' => esc_html__('Enable Back To Top Button On Mobile', 'organico'),
            'default' => true,
            'on' => esc_html__('Yes', 'organico'),
            'off' => esc_html__('No', 'organico'),
        )                   
    )
);
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Google Map API Key', 'organico'),
    'fields' => array(
        array(
            'id'=>'ftc_gmap_api_key',
            'type' => 'text',
            'title' => esc_html__('Enter your API key', 'organico'),
            'default' => 'AIzaSyAypdpHW1-ENvAZRjteinZINafSBpAYxDE',
        )                   
    )
);

/* * *  Typography  * * */
$this->sections[] = array(
    'icon' => 'icofont icofont-brand-appstore',
    'icon_class' => 'icon',
    'title' => esc_html__('Styling', 'organico'),
    'fields' => array(				
    )
);	

/** Color Scheme Options  * */
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Color Scheme', 'organico'),
    'fields' => array(					
        array(
            'id' => 'ftc_primary_color',
            'type' => 'color',
            'title' => esc_html__('Primary Color', 'organico'),
            'subtitle' => esc_html__('Select a main color for your site.', 'organico'),
            'default' => '#82b53f',
            'transparent' => false,
        ),				 
        array(
            'id' => 'ftc_secondary_color',
            'type' => 'color',
            'title' => esc_html__('Secondary Color', 'organico'),
            'default' => '#282828',
            'transparent' => false,
        ),
        array(
            'id' => 'ftc_body_background_color',
            'type' => 'color',
            'title' => esc_html__('Body Background Color', 'organico'),
            'default' => '#ffffff',
            'transparent' => false,
        ),	
    )
);

/** Typography Config    **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Typography', 'organico'),
    'fields' => array(
        array(
            'id'=>'ftc_body_font_enable_google_font',
            'type' => 'switch',
            'title' => esc_html__('Body Font - Enable Google Font', 'organico'),
            'default' => 1,
            'folds'    => 1,
            'on' => esc_html__('Yes', 'organico'),
            'off' => esc_html__('No', 'organico'),
        ),
        array(
            'id'=>'ftc_body_font_family',
            'type'          => 'select',
            'title'         => esc_html__('Body Font - Family Font', 'organico'),
            'default'       => 'Arial',
            'options'            => array(
                "Arial" => "Arial"
                ,"Advent Pro" => "Advent Pro"
                ,"Verdana" => "Verdana, Geneva"
                ,"Trebuchet" => "Trebuchet"
                ,"Georgia" => "Georgia"
                ,"Times New Roman" => "Times New Roman"
                ,"Tahoma, Geneva" => "Tahoma, Geneva"
                ,"Palatino" => "Palatino"
                ,"Helvetica" => "Helvetica"
                ,"BebasNeue" => "BebasNeue"
                ,"Poppins" =>"Poppins"


            ),
        ),
        array(
            'id'=>'ftc_body_font_google',
            'type' 			=> 'typography',
            'title' 		=> esc_html__('Body Font - Google Font', 'organico'),
            'google' 		=> true,
            'subsets' 		=> false,
            'font-style' 	=> false,
            'font-weight'   => false,
            'font-size'     => false,
            'line-height'   => false,
            'text-align' 	=> false,
            'color' 		=> false,
            'output'        => array('body'),
            'default'       => array(
                'color'			=> "#000000",
                'google'		=> true,
                'font-family'	=> 'Roboto Slab'

            ),
            'preview'       => array(
                "text" => esc_html__("This is my font preview!", "organico")
                ,"size" => "30px"
            )
        ),
        array(
            'id'        =>'ftc_secondary_body_font_enable_google_font',
            'title'     => esc_html__('Secondary Body Font - Enable Google Font', 'organico'),
            'on'       => esc_html__("Enable", "organico"),
            'off'      => esc_html__("Disable", "organico"),
            'type'     => 'switch',
            'default'   => 1
        ),
        array(
            'id'            => 'ftc_secondary_body_font_google',
            'type'          => 'typography',
            'title'         => esc_html__('Body Font - Google Font', 'organico'),
            'google'        => true,
            'subsets'       => false,
            'font-style'    => false,
            'font-weight'   => false,
            'font-size'     => false,
            'line-height'   => false,
            'text-align'    => false,
            'color'         => false,
            'output'        => array('body'),
            'default'       => array(
                'color'         =>"#000000",
                'google'        =>true,
                'font-family'   =>'Roboto'                            
            ),
            'preview'       => array(
                "text" => esc_html__("This is my font preview!", "organico")
                ,"size" => "30px"
            )
        ),
        array(
            'id'        =>'ftc_font_size_body',
            'type'      => 'slider',
            'title'     => esc_html__('Body Font Size', 'organico'),
            'desc'     => esc_html__("In pixels. Default is 14px", "organico"),
            'min'      => '10',
            'step'     => '1',
            'max'      => '50',
            'default'   => '14'
        ),	
        array(
            'id'        =>'ftc_line_height_body',
            'type'      => 'slider',
            'title'     => esc_html__('Body Font Line Heigh', 'organico'),
            'desc'     => esc_html__("In pixels. Default is 24px", "organico"),
            'min'      => '10',
            'step'     => '1',
            'max'      => '50',
            'default'   => '24'
        )				
    )
);

/*** WooCommerce Config     ** */
if ( class_exists( 'Woocommerce' ) ) :
    $this->sections[] = array(
        'icon' => 'icofont icofont-cart-alt',
        'icon_class' => 'icon',
        'title' => esc_html__('Ecommerce', 'organico'),
        'fields' => array(				
        )
    );

    /** Woocommerce **/
    $this->sections[] = array(
        'icon' => 'icofont icofont-double-right',
        'icon_class' => 'icon',
        'subsection' => true,
        'title' => esc_html__('Woocommerce', 'organico'),
        'fields' => array(	
            array(  
                "title"      => esc_html__("Product Label", "organico")
                ,"desc"     => ""
                ,"id"       => "product_label_options"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(  
                "title"      => esc_html__("Product Sale Label Text", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_product_sale_label_text"
                ,"default"      => "Sale"
                ,"type"     => "text"
            ),
            array(  
                "title"      => esc_html__("Product Feature Label Text", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_product_feature_label_text"
                ,"default"      => "New"
                ,"type"     => "text"
            ),						
            array(  
                "title"      => esc_html__("Product Out Of Stock Label Text", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_product_out_of_stock_label_text"
                ,"default"      => "Sold out"
                ,"type"     => "text"
            ),           		
            array(   
                "title"      => esc_html__("Show Sale Label As", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_show_sale_label_as"
                ,"default"      => "text"
                ,"type"     => "select"
                ,"options"  => array(
                    'text'      => esc_html__('Text', 'organico')
                    ,'number'   => esc_html__('Number', 'organico')
                    ,'percent'  => esc_html__('Percent', 'organico')
                )
            ),
            array(  
                "title"      => esc_html__("Product Hover Style", "organico")
                ,"desc"     => ""
                ,"id"       => "prod_hover_style_options"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(  
                "title"      => esc_html__("Hover Style", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_effect_hover_product_style"
                ,"default"      => "style-1"
                ,"type"     => "select"
                ,"options"  => array(
                    'style-1'       => esc_html__('Style 1', 'organico')
                    ,'style-2'      => esc_html__('Style 2', 'organico')
                    ,'style-3'      => esc_html__('Style 3', 'organico')
                )
            ),
            array(  
                "title"      => esc_html__("Back Product Image", "organico")
                ,"desc"     => ""
                ,"id"       => "introduction_enable_img_back"
                ,"icon"     => true
                ,"type"     => "info"
            ),					
            array(   
                "title"      => esc_html__("Enable Second Product Image", "organico")
                ,"desc"     => esc_html__("Show second product image on hover. It will show an image from Product Gallery", "organico")
                ,"id"       => "ftc_effect_product"
                ,"default"      => "1"
                ,"type"     => "switch"
            ),
            array(  
                "title"      => "Number Of Gallery Product Image"
                ,"id"       => "ftc_product_gallery_number"
                ,"default"      => 3
                ,"type"     => "text"
            ),
            array(  
                "title"      => esc_html__("Lazy Load", "organico")
                ,"desc"     => ""
                ,"id"       => "prod_lazy_load_options"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(  
                "title"      => esc_html__("Activate Lazy Load", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_prod_lazy_load"
                ,"default"      => 1
                ,"type"     => "switch"
            ),
            array(
                'id'=>'ftc_prod_placeholder_img',
                'type' => 'media',
                'compiler'  => 'true',
                'mode'      => false,
                'title' => esc_html__('Placeholder Image', 'organico'),
                'desc'      => '',
                'default' => array(
                    'url' => get_template_directory_uri(). '/assets/images/prod_loading.gif'
                )
            ),
            array(  
                "title"      => esc_html__("Quickshop", "organico")
                ,"desc"     => ""
                ,"id"       => "quickshop_options"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(  
                "title"      => esc_html__("Activate Quickshop", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_enable_quickshop"
                ,"default"      => 1
                ,"type"     => "switch"
            ),
            array(  
                "title"      => esc_html__("On/Off Infinite Scroll", "organico")
                ,"desc"     => ""
                ,"id"       => "prod_infinite_scroll"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(  
                "title"      => esc_html__("Apply Infinite Scroll", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_Infinite_scroll"
                ,"default"      => "0"
                ,"type"     => "select"
                ,"options"  => array(
                    '0'       => esc_html__('No', 'organico')
                    ,'1'      => esc_html__('Yes', 'organico')
                )
            ),
            array(  
                "title"      => esc_html__("Catalog Mode", "organico")
                ,"desc"     => ""
                ,"id"       => "introduction_catalog_mode"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(  
                "title"      => esc_html__("Enable Catalog Mode", "organico")
                ,"desc"     => esc_html__("Hide all Add To Cart buttons on your site. You can also hide Shopping cart by going to Header tab > turn Shopping Cart option off", "organico")
                ,"id"       => "ftc_enable_catalog_mode"
                ,"default"      => "0"
                ,"type"     => "switch"
            ),
            array(     
                "title"      => esc_html__("Ajax Search", "organico")
                ,"desc"     => ""
                ,"id"       => "ajax_search_options"
                ,"icon"     => true
                ,"type"     => "info"
            ),
            array(     
                "title"      => esc_html__("Enable Ajax Search", "organico")
                ,"desc"     => ""
                ,"id"       => "ftc_ajax_search"
                ,"default"      => "1"
                ,"type"     => "switch"
            ),
            array(     
                "title"      => esc_html__("Number Of Results", "organico")
                ,"desc"     => esc_html__("Input -1 to show all results", "organico")
                ,"id"       => "ftc_ajax_search_number_result"
                ,"default"      => 4
                ,"type"     => "text"
            )
        )
);

/*** Product Category ***/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__( 'Product Category', 'organico'),
    'fields' => array(
        array(
            'id' => 'ftc_prod_cat_layout',
            'type' => 'image_select',
            'title' => esc_html__('Product Category Layout', 'organico'),
            'des' => esc_html__('Select main content and sidebar alignment.', 'organico'),
            'options' => $ftc_layouts,
            'default' => '1-1-0'
        ),						
        array(    
            "title"      => esc_html__("Left Sidebar", "organico")
            ,"id"       => "ftc_prod_cat_left_sidebar"
            ,"default"      => "product-category-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),						
        array(    
            "title"      => esc_html__("Right Sidebar", "organico")
            ,"id"       => "ftc_prod_cat_right_sidebar"
            ,"default"      => "product-category-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(    
            "title"      => esc_html__("Product Columns", "organico")
            ,"id"       => "ftc_prod_cat_columns"
            ,"default"      => "3"
            ,"type"     => "select"
            ,"options"  => array(
                3   => 3
                ,4  => 4
                ,5  => 5
                ,6  => 6
            )
        ),
        array(    
            "title"      => esc_html__("Products Per Page", "organico")
            ,"desc"     => esc_html__("Number of products per page", "organico")
            ,"id"       => "ftc_prod_cat_per_page"
            ,"default"      => 12
            ,"type"     => "text"
        ),
        array(   
            "title"      => esc_html__("Catalog view", "organico")
            ,"desc"     => esc_html__("Display option to show product in grid or list view", "organico")
            ,"id"       => "ftc_enable_glt"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),       
        array(
            'title'      => esc_html__( 'Default catalog view', 'organico' ),
            'desc'  => esc_html__( 'Display products in grid or list view by default', 'organico' ),
            'id'        => 'ftc_glt_default',
            'type'      => 'select',
            "default"      => 'grid',
            'options'   => array(
                'grid'  => esc_html__('Grid', 'organico'),
                'list'  => esc_html__('List', 'organico')
            )
        ),						
        array(   
            "title"      => esc_html__("Top Content Widget Area", "organico")
            ,"desc"     => esc_html__("Display Product Category Top Content widget area", "organico")
            ,"id"       => "ftc_prod_cat_top_content"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(    
            "title"      => esc_html__("Product Thumbnail", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(    
            "title"      => esc_html__("Product Label", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_label"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Categories", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_cat"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Title", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product SKU", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_sku"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Rating", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_rating"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Price", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_price"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Add To Cart Button", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat_add_to_cart"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(    
            "title"      => esc_html__("Product Short Description - Grid View", "organico")
            ,"desc"     => esc_html__("Show product description on grid view", "organico")
            ,"id"       => "ftc_prod_cat_grid_desc"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Short Description - Grid View - Limit Words", "organico")
            ,"desc"     => esc_html__("Number of words to show product description on grid view. It is also used for product shortcode", "organico")
            ,"id"       => "ftc_prod_cat_grid_desc_words"
            ,"default"      => 8
            ,"type"     => "text"
        ),
        array(     
            "title"      => esc_html__("Product Short Description - List View", "organico")
            ,"desc"     => esc_html__("Show product description on list view", "organico")
            ,"id"       => "ftc_prod_cat_list_desc"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  
            "title"      => esc_html__("Product Short Description - List View - Limit Words", "organico")
            ,"desc"     => esc_html__("Number of words to show product description on list view", "organico")
            ,"id"       => "ftc_prod_cat_list_desc_words"
            ,"default"      => 30
            ,"type"     => "text"
        )					
    )
);
/* Product Details Config  */
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Product Details', 'organico'),
    'fields' => array(
        array(
            'id' => 'ftc_prod_layout',
            'type' => 'image_select',
            'title' => esc_html__('Product Detail Layout', 'organico'),
            'des' => esc_html__('Select main content and sidebar alignment.', 'organico'),
            'options' => $ftc_layouts,
            'default' => '0-1-1'
        ),
        array(  
            "title"      => esc_html__("Left Sidebar", "organico")
            ,"id"       => "ftc_prod_left_sidebar"
            ,"default"      => "product-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  
            "title"      => esc_html__("Right Sidebar", "organico")
            ,"id"       => "ftc_prod_right_sidebar"
            ,"default"      => "product-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  
            "title"      => esc_html__("Product Cloud Zoom", "organico")
            ,"desc"     => esc_html__("If you turn it off, product gallery images will open in a lightbox. This option overrides the option of WooCommerce", "organico")
            ,"id"       => "ftc_prod_cloudzoom"
            ,"default"      => 1
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Attribute Dropdown", "organico")
            ,"desc"     => esc_html__("If you turn it off, the dropdown will be replaced by image or text label", "organico")
            ,"id"       => "ftc_prod_attr_dropdown"
            ,"default"      => 1
            ,"type"     => "switch"
        ),						
        array(  "title"      => esc_html__("Product Thumbnail", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Label", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_label"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Navigation", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_show_prod_navigation"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Title", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Title In Content", "organico")
            ,"desc"     => esc_html__("Display the product title in the page content instead of above the breadcrumbs", "organico")
            ,"id"       => "ftc_prod_title_in_content"
            ,"default"      => 0
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Rating", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_rating"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product SKU", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_sku"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Availability", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_availability"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Excerpt", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_excerpt"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Count Down", "organico")
            ,"desc"     => esc_html__("You have to activate ThemeFTC plugin", "organico")
            ,"id"       => "ftc_prod_count_down"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Price", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_price"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Add To Cart Button", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_add_to_cart"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Categories", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_cat"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Tags", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_tag"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Sharing", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_sharing"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Size Chart", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_show_prod_size_chart"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Size Chart Image", "organico")
            ,"desc"     => esc_html__("Select an image file for all Product", "organico")
            ,"id"       => "ftc_prod_size_chart"
            ,"type"     => "media"
            ,'default' => array(
                'url' => get_template_directory_uri(). '/assets/images/size-chart.jpg'
            )
        ),


        array(  "title"      => esc_html__("Product Thumbnails", "organico")
            ,"desc"     => ""
            ,"id"       => "introduction_product_thumbnails"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  "title"      => esc_html__("Product Thumbnails Style", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_thumbnails_style"
            ,"default"      => "horizontal" 
            ,"type"     => "select"
            ,"options"  => array(
                'vertical'      => esc_html__('Vertical', 'organico')
                ,'horizontal'   => esc_html__('Horizontal', 'organico')
            )
        ),
        array(  "title"      => esc_html__("Product Tabs", "organico")
            ,"desc"     => ""
            ,"id"       => "introduction_product_tabs"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  "title"      => esc_html__("Product Tabs", "organico")
            ,"desc"     => esc_html__("Enable Product Tabs", "organico")
            ,"id"       => "ftc_prod_tabs"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Tabs Style", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_style_tabs"
            ,"default"      => "defaut"
            ,"type"     => "select"
            ,"options"  => array(
                'default'       => esc_html__('Default', 'organico')
                ,'accordion'    => esc_html__('Accordion', 'organico')
                ,'vertical' => esc_html__('Vertical', 'organico')
            )
        ),
        array(  "title"      => esc_html__("Product Tabs Position", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_tabs_position"
            ,"default"      => "after_summary" 
            ,"fold"     => "ftc_prod_tabs"
            ,"type"     => "select"
            ,"options"  => array(
                'after_summary'     => esc_html__('After Summary', 'organico')
                ,'inside_summary'   => esc_html__('Inside Summary', 'organico')
            )
        ),
        array(  "title"      => esc_html__("Product Custom Tab", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_custom_tab"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"fold"     => "ftc_prod_tabs"
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Product Custom Tab Title", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_custom_tab_title"
            ,"default"      => "Custom tab"
            ,"fold"     => "ftc_prod_tabs"
            ,"type"     => "text"
        ),
        array(  "title"      => esc_html__("Product Custom Tab Content", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_custom_tab_content"
            ,"default"      => "Your custom content goes here. You can add the content for individual product"
            ,"fold"     => "ftc_prod_tabs"
            ,"type"     => "textarea"
        ),
        array(  "title"      => esc_html__("Product Ads Banner", "organico")
            ,"desc"     => ""
            ,"id"       => "introduction_product_ads_banner"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(  "title"      => esc_html__("Ads Banner", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_ads_banner"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(     "title"      => esc_html__("Ads Banner Content", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_ads_banner_content"
            ,"default"      => ''
            ,"fold"     => "ftc_prod_ads_banner"
            ,"type"     => "textarea"
        ),
        array(  "title"      => esc_html__("Related - Up-Sell Products", "organico")
            ,"desc"     => ""
            ,"id"       => "introduction_related_upsell_product"
            ,"icon"     => true
            ,"type"     => "info"
        ),
        array(     "title"      => esc_html__("Up-Sell Products", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_upsells"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Related Products", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_prod_related"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        )					
    )
);

endif;


/* Blog Settings */
$this->sections[] = array(
    'icon' => 'icofont icofont-ui-copy',
    'icon_class' => 'icon',
    'title' => esc_html__('Blog', 'organico'),
    'fields' => array(				
    )
);		

// Blog Layout
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Blog Layout', 'organico'),
    'fields' => array(	
        array(
            'id' => 'ftc_blog_layout',
            'type' => 'image_select',
            'title' => esc_html__('Blog Layout', 'organico'),
            'des' => esc_html__('Select main content and sidebar alignment.', 'organico'),
            'options' => $ftc_layouts,
            'default' => '1-1-0'
        ),
        array(   "title"      => esc_html__("Left Sidebar", "organico")
            ,"id"       => "ftc_blog_left_sidebar"
            ,"default"      => "blog-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),				
        array(     "title"      => esc_html__("Right Sidebar", "organico")
            ,"id"       => "ftc_blog_right_sidebar"
            ,"default"      => "blog-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(   "title"      => esc_html__("Blog Thumbnail", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),										
        array(   "title"      => esc_html__("Blog Date", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_date"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Title", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Author", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_author"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Comment", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_comment"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Count View", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_count_view"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Read More Button", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_read_more"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Categories", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_categories"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_excerpt"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt Strip All Tags", "organico")
            ,"desc"     => esc_html__("Strip all html tags in Excerpt", "organico")
            ,"id"       => "ftc_blog_excerpt_strip_tags"
            ,"default"      => 0
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Excerpt Max Words", "organico")
            ,"desc"     => esc_html__("Input -1 to show full excerpt", "organico")
            ,"id"       => "ftc_blog_excerpt_max_words"
            ,"default"      => "-1"
            ,"type"     => "text"
        )					
    )
);				

/** Blog Detail **/
$this->sections[] = array(
    'icon' => 'icofont icofont-double-right',
    'icon_class' => 'icon',
    'subsection' => true,
    'title' => esc_html__('Blog Details', 'organico'),
    'fields' => array(	
        array(
            'id' => 'ftc_blog_details_layout',
            'type' => 'image_select',
            'title' => esc_html__('Blog Detail Layout', 'organico'),
            'des' => esc_html__('Select main content and sidebar alignment.', 'organico'),
            'options' => $ftc_layouts,
            'default' => '0-1-0'
        ),
        array(  "title"      => esc_html__("Left Sidebar", "organico")
            ,"id"       => "ftc_blog_details_left_sidebar"
            ,"default"      => "blog-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  "title"      => esc_html__("Right Sidebar", "organico")
            ,"id"       => "ftc_blog_details_right_sidebar"
            ,"default"      => "blog-detail-sidebar"
            ,"type"     => "select"
            ,"options"  => $of_sidebars
        ),
        array(  "title"      => esc_html__("Blog Thumbnail", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_thumbnail"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(     "title"      => esc_html__("Blog Date", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_date"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Title", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_title"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Content", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_content"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Tags", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_tags"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Count View", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_count_view"
            ,"default"      => 0
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Categories", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_categories"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Author Box", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_author_box"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Related Posts", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_related_posts"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        ),
        array(  "title"      => esc_html__("Blog Comment Form", "organico")
            ,"desc"     => ""
            ,"id"       => "ftc_blog_details_comment_form"
            ,"default"      => 1
            ,"on"       => esc_html__("Show", "organico")
            ,"off"      => esc_html__("Hide", "organico")
            ,"type"     => "switch"
        )				
    )
);		
}


public function setHelpTabs() {

}

public function setArguments() {

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$this->args = array(
    'opt_name'          => 'smof_data',
    'menu_type'         => 'submenu',
    'allow_sub_menu'    => true,
    'display_name'      => $theme->get( 'Name' ),
    'display_version'   => $theme->get( 'Version' ),
    'menu_title'        => esc_html__('Theme Options', 'organico'),
    'page_title'        => esc_html__('Theme Options', 'organico'),
    'templates_path'    => get_template_directory() . '/admin/et-templates/',
    'disable_google_fonts_link' => true,

    'async_typography'  => false,
    'admin_bar'         => false,
    'admin_bar_icon'       => 'dashicons-admin-generic',
    'admin_bar_priority'   => 50,
    'global_variable'   => '',
    'dev_mode'          => false,
    'customizer'        => false,
    'compiler'          => false,

    'page_priority'     => null,
    'page_parent'       => 'themes.php',
    'page_permissions'  => 'manage_options',
    'menu_icon'         => '',
    'last_tab'          => '',
    'page_icon'         => 'icon-themes',
    'page_slug'         => 'smof_data',
    'save_defaults'     => true,
    'default_show'      => false,
    'default_mark'      => '',
    'show_import_export' => true,
    'show_options_object' => false,

    'transient_time'    => 60 * MINUTE_IN_SECONDS,
    'output'            => false,
    'output_tag'        => false,

    'database'              => '',
    'system_info'           => false,

    'hints' => array(
        'icon'          => 'icon-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'         => 'light',
            'shadow'        => true,
            'rounded'       => false,
            'style'         => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show'          => array(
                'effect'        => 'slide',
                'duration'      => '500',
                'event'         => 'mouseover',
            ),
            'hide'      => array(
                'effect'    => 'slide',
                'duration'  => '500',
                'event'     => 'click mouseleave',
            ),
        ),
    ),
    'use_cdn'                   => true,
);


// Panel Intro text -> before the form
if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
    if (!empty($this->args['global_variable'])) {
        $v = $this->args['global_variable'];
    } else {
        $v = str_replace('-', '_', $this->args['opt_name']);
    }
}
}			

}

global $redux_ftc_settings;
$redux_ftc_settings = new Redux_Framework_smof_data();
}