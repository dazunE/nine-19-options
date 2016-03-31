<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://919.press
 * @since      1.0.0
 *
 * @package    Nine_19_Options
 * @subpackage Nine_19_Options/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Nine_19_Options
 * @subpackage Nine_19_Options/admin
 * @author     Dasun Edirisinghe <dazunj4me@gmail.com>
 */
class Nine_19_Options_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;


	private $option_name = 'Nine_19_Options';

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nine_19_Options_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nine_19_Options_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/nine-19-options-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nine_19_Options_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nine_19_Options_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/nine-19-options-admin.js', array( 'jquery' ), $this->version, false );

	}


	public function ninteen_custom_post_types() {


		/*
		* This function is to make Team Custom Post Type
		*/ 

		$labels = array(
			'name'                  => _x( 'Team', 'Post Type General Name', 'nineteen-options' ),
			'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'nineteen-options' ),
			'menu_name'             => __( 'Team', 'nineteen-options' ),
			'name_admin_bar'        => __( 'Team ', 'nineteen-options' ),
			'archives'              => __( 'Member Archives', 'nineteen-options' ),
			'parent_item_colon'     => __( 'Parent Member:', 'nineteen-options' ),
			'all_items'             => __( 'All Members', 'nineteen-options' ),
			'add_new_item'          => __( 'Add New Member', 'nineteen-options' ),
			'add_new'               => __( 'Add New Member', 'nineteen-options' ),
			'new_item'              => __( 'New Member', 'nineteen-options' ),
			'edit_item'             => __( 'Edit Member', 'nineteen-options' ),
			'update_item'           => __( 'Update Member', 'nineteen-options' ),
			'view_item'             => __( 'View Member', 'nineteen-options' ),
			'search_items'          => __( 'Search Member', 'nineteen-options' ),
			'not_found'             => __( 'Not found', 'nineteen-options' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'nineteen-options' ),
			'featured_image'        => __( 'Member Image', 'nineteen-options' ),
			'set_featured_image'    => __( 'Set member image', 'nineteen-options' ),
			'remove_featured_image' => __( 'Remove member image', 'nineteen-options' ),
			'use_featured_image'    => __( 'Use as member image', 'nineteen-options' ),
			'insert_into_item'      => __( 'Insert into member', 'nineteen-options' ),
			'uploaded_to_this_item' => __( 'Uploaded to this member', 'nineteen-options' ),
			'items_list'            => __( 'Membesr list', 'nineteen-options' ),
			'items_list_navigation' => __( 'Members list navigation', 'nineteen-options' ),
			'filter_items_list'     => __( 'Filter members list', 'nineteen-options' ),
		);
		$args = array(
			'label'                 => __( 'Team', 'nineteen-options' ),
			'description'           => __( 'MFI-Insight Analytics Team', 'nineteen-options' ),
			'labels'                => $labels,
			'supports'              => array( 'title','thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);

		register_post_type( 'team', $args );

		/*
		* This is for the careers
		*/

		$labels = array(
			'name'                  => _x( 'Careers', 'Post Type General Name', 'nineteen-options' ),
			'singular_name'         => _x( 'Career', 'Post Type Singular Name', 'nineteen-options' ),
			'menu_name'             => __( 'Careers', 'nineteen-options' ),
			'name_admin_bar'        => __( 'Career ', 'nineteen-options' ),
			'archives'              => __( 'Careers Archives', 'nineteen-options' ),
			'parent_item_colon'     => __( 'Parent Careers:', 'nineteen-options' ),
			'all_items'             => __( 'All Careerss', 'nineteen-options' ),
			'add_new_item'          => __( 'Add New Careers', 'nineteen-options' ),
			'add_new'               => __( 'Add New Careers', 'nineteen-options' ),
			'new_item'              => __( 'New Careers', 'nineteen-options' ),
			'edit_item'             => __( 'Edit Careers', 'nineteen-options' ),
			'update_item'           => __( 'Update Careers', 'nineteen-options' ),
			'view_item'             => __( 'View Careers', 'nineteen-options' ),
			'search_items'          => __( 'Search Careers', 'nineteen-options' ),
			'not_found'             => __( 'Not found', 'nineteen-options' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'nineteen-options' ),
			'featured_image'        => __( 'Careers Image', 'nineteen-options' ),
			'set_featured_image'    => __( 'Set career image', 'nineteen-options' ),
			'remove_featured_image' => __( 'Remove career image', 'nineteen-options' ),
			'use_featured_image'    => __( 'Use as career image', 'nineteen-options' ),
			'insert_into_item'      => __( 'Insert into career', 'nineteen-options' ),
			'uploaded_to_this_item' => __( 'Uploaded to this career', 'nineteen-options' ),
			'items_list'            => __( 'Careers list', 'nineteen-options' ),
			'items_list_navigation' => __( 'Careers list navigation', 'nineteen-options' ),
			'filter_items_list'     => __( 'Filter members list', 'nineteen-options' ),
		);
		$args = array(
			'label'                 => __( 'Careers', 'nineteen-options' ),
			'description'           => __( 'Careers Post Type', 'nineteen-options' ),
			'labels'                => $labels,
			'supports'              => array( 'title','thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'menu_icon'             => 'dashicons-nametag',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		
		register_post_type( 'careers', $args );

	}


	public function ninteen_required_plugins(){

	    $plugins = array(

	        array(
	            'name'               => 'Meta Box',
	            'slug'               => 'meta-box',
	            'required'           => true,
	            'force_activation'   => flase,
	            'force_deactivation' => false,
	        ),

	    );

	    $config  = array(

	        'domain'           => 'glamo',
	        'default_path'     => '',
	        'parent_menu_slug' => 'themes.php',
	        'parent_url_slug'  => 'themes.php',
	        'menu'             => 'install-required-plugins',
	        'has_notices'      => true,
	        'is_automatic'     => false,
	        'message'          => '',
	        'strings'          => array(
	            'page_title'                      => __( 'Install Required Plugins', 'glamo' ),
	            'menu_title'                      => __( 'Install Plugins', 'glamo' ),
	            'installing'                      => __( 'Installing Plugin: %s', 'glamo' ),
	            'oops'                            => __( 'Something went wrong with the plugin API.', 'glamo' ),
	            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ),
	            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ),
	            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ),
	            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ),
	            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ),
	            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ),
	            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ),
	            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ),
	            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
	            'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
	            'return'                          => __( 'Return to Required Plugins Installer', 'glamo' ),
	            'plugin_activated'                => __( 'Plugin activated successfully.', 'glamo' ),
	            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'glamo' ),
	            'nag_type'                        => 'updated',
	        )
	    );

    tgmpa( $plugins, $config );

}
	
	public function option_admin_page(){

		add_menu_page( 'NINE19 Options', 'NINE19 Options', 'manage_options', 'nineteen-options', array( $this , 'nineteen_admin_page'), 'dashicons-forms', 61 );

	}

	public function option_admin_sub_menu(){
		add_submenu_page('nineteen-options',__( 'General Settings' , 'nineteen-options'), __( 'General Settings' , 'nineteen-options'), 'manage_options', '?page=nineteen-options&tab=general_options');
	}

	public function nineteen_admin_page(){

		include_once 'partials/nine-19-options-admin-display.php';
	}

	public function nineteen_register_settings(){

		add_settings_section($this->option_name.'_general',
			__( 'General Settings' ,'nineteen-options'),
			array( $this, $this->option_name.'_general_call_back'),
			$this->plugin_name);
	}

	public function Nine_19_Options_general_call_back(){
		echo '<p>' . __( 'Please change the settings accordingly.', 'nineteen-options' ) . '</p>';
	}



	

	

}
