<?php

class Wn_Webpage_Slider_Elementor_Widgets {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {

		require_once('wn_webpge_slider_elementor.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
		add_action('elementor/editor/before_enqueue_scripts', function() {			
			wp_enqueue_style( 'wn_webpage_slider_elementor_css', WN_WEBPAGE_SLIDER_ELEMENTOR_URL . 'css/wn-webpage-slider-icon.css' );			
		});
		
	}


	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Wn_Webpage_Slider_Elementor() );
	}

}

add_action( 'init', 'wn_webpage_slider_elmentor_init' );

function wn_webpage_slider_elmentor_init() {
	Wn_Webpage_Slider_Elementor_Widgets::get_instance();	
}
