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


	public function option_admin_page(){

		add_menu_page( 'NINE19 Options', 'NINE19 Options', 'manage_options', 'nineteen-options', array( $this , 'nineteen_admin_page'), 'dashicons-forms', 61 );

	}

	public function nineteen_admin_page(){

		include_once 'partials/nine-19-options-admin-display.php';
	}






	

}
