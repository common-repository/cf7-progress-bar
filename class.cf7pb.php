<?php

class cF7ProgressBar {

	private static $initiated = false;

	public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}
	}

	private static function init_hooks() {
		self::$initiated = true;
		add_shortcode('cf7-progress-bar', array( 'cF7ProgressBar' , 'wpcf7apb_func' ) );
        add_action( 'wp_enqueue_scripts', array( 'cF7ProgressBar' , 'register_plugin_styles' ) );
	}

	public static function wpcf7apb_func($atts) {
		$GLOBALS['bar_color'] = $atts['color'];
		include CF7PB_PLUGIN_DIR . 'includes/wpcf7apb.php';
	}

	public static function register_plugin_styles() {
			/* Css */
		    add_action( 'wp_footer','cf7spb_style' );
		    function cf7spb_style(){
		    	echo '<style>.wpcf7a-progress-btn{display: inline-block;height: 10px;width: 30px;background: transparent;border: 1px solid '.$GLOBALS['bar_color'].';box-shadow: none !important}.wpcf7a-fill{background-color: '.$GLOBALS['bar_color'].';}</style>';
			}

		    /* JS */
		    wp_enqueue_script( 'wpcf7apb-js', plugins_url( 'assets/wpcf7apb.js', __FILE__  ) );
	}

}

?>