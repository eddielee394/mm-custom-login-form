<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://tutorialonline.net/
 * @since      1.0.0
 *
 * @package    Mm_Sc
 * @subpackage Mm_Sc/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mm_Sc
 * @subpackage Mm_Sc/public
 * @author     Yamen Shahin <yamenshahin@gmail.com>
 */
class Mm_Sc_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mm_Sc_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mm_Sc_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mm-sc-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mm_Sc_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mm_Sc_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mm-sc-public.js', array( 'jquery' ), $this->version, false );

	}

}
/**
* Add Shortcode for Login form
*
* @since    1.0.0
*/

function mm_form_shortcode( $atts, $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'form' => 'default',
			'url'  => '/join'
		),
		$atts
	);
	if ($atts['form'] == 'blue') {
		ob_start();
		include (plugin_dir_path( __FILE__ ) . 'partials/mm-sc-public-blue-display.php');
		$content = ob_get_clean();
	} elseif ($atts['form'] =='red') {
		ob_start();
		include (plugin_dir_path( __FILE__ ) . 'partials/mm-sc-public-red-display.php');
		$content = ob_get_clean();
	} else {
		ob_start();
		include (plugin_dir_path( __FILE__ ) . 'partials/mm-sc-public-default-display.php');
		$content = ob_get_clean();
	}
	
	// run shortcode parser recursively
    $content = do_shortcode($content);
    return $content;
 
}
add_shortcode( 'mm-form-c', 'mm_form_shortcode' );