<?php


namespace Elementor;

class Wn_Webpage_Slider_Elementor extends Widget_Base
{

	public function get_name()
	{
		return 'wn-webpage-slider-widget';
	}

	public function get_title()
	{
		return 'Webpages Slider';
	}

	public function get_icon()
	{
		return 'wn_webpage_slider_elementor_icon';
	}

	public function get_categories()
	{
		return ['basic'];
	}

	protected function _register_controls($options = [])
	{

		
		$this->start_controls_section(
			'section_title',
			[
				'label' => __('WN Webpages Slider', 'wn_webpage_slider_elementor'),
			]
		);		

		$this->add_control(
			'image1',
			[
				'label' => __( 'Image 1', 'wn_webpage_slider_elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		

		$this->add_control(
			'image2',
			[
				'label' => __( 'Image 2', 'wn_webpage_slider_elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'image3',
			[
				'label' => __( 'Image 3', 'wn_webpage_slider_elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		


		$this->add_responsive_control(
			'width',
			[
				'label' => __( 'Width', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],					
				],


				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 500,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 400,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 350,
					'unit' => 'px',
				],
				'selectors' => [
					
					'{{WRAPPER}} .wn_webpage_slider_main' => 'width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .wn_webpage_slider_left' => 'width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .wn_webpage_slider_right' => 'width: {{SIZE}}{{UNIT}};',

					'{{WRAPPER}} .wn_webpage_slider_main::before' => 'transform: translateY(calc(-{{SIZE}}{{UNIT}} * 0.0766667));',
					'{{WRAPPER}} .childrens::before' => 'transform: translateY(calc(-{{SIZE}}{{UNIT}} * 0.0766667));',


					'{{WRAPPER}} .slide_right' => 'background-position: calc({{SIZE}}{{UNIT}} /2) 0%, -{{SIZE}}{{UNIT}} 0% !important;',

					'{{WRAPPER}} .slide_right_main' => 'background-position: calc({{SIZE}}{{UNIT}} /2) 100%, -{{SIZE}}{{UNIT}} 0% !important;',

					'{{WRAPPER}} .slide_right_fast' => 'background-position: {{SIZE}}{{UNIT}} 0%, 0px 0% !important;',

					'{{WRAPPER}} .slide_right_fast_main' => 'background-position: {{SIZE}}{{UNIT}} 100%, 0px 0% !important;',

					

					

				
					 
					
				],

							
			]
		);

		$this->add_responsive_control(
			'height',
			[
				'label' => __( 'Height', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
					
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 330,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 300,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 280,
					'unit' => 'px',
				],
				'selectors' => [					
					

					'{{WRAPPER}} .general' => 'padding-top: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .wn_webpage_slider_main' => 'height: {{SIZE}}{{UNIT}};'
				
					
				],
				
							
			]
		);

		

		$this->add_responsive_control(
			'horizontal_separation',
			[
				'label' => __( 'Horizontal Separation', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => -250,
						'max' => 250,
						'step' => 1,
					],					
				],
				
				
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => -100,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => -100,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => -80,
					'unit' => 'px',
				],
				'selectors' => [					
					

					'{{WRAPPER}} .wn_webpage_slider_left' => 'left: calc(50% - {{SIZE}}{{UNIT}});',
					'{{WRAPPER}} .wn_webpage_slider_right' => 'left: calc(50% + {{SIZE}}{{UNIT}});'
					

					
				],
			]
		);

		$this->add_responsive_control(
			'vertical_separation',
			[
				'label' => __( 'Vertical Separation', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],					
				],
								
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 250,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 250,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 200,
					'unit' => 'px',
				],
				'selectors' => [					
					

					'{{WRAPPER}} .wn_webpage_slider_right' => 'height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .wn_webpage_slider_left' => 'height: {{SIZE}}{{UNIT}};'
				
					
				],
			]
		);

		
		$this->add_control(
			'hr1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'frequency',
			[
				'label' => __( 'Frequency', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 's' ],
				'range' => [
					's' => [
						'min' => 0,
						'max' => 60,
						'step' => 0.1,
					],					
				],
				'default' => [
					'unit' => 's',
					'size' => 6,
				],
				
			]
		);

		
		$this->add_control(
			'delay_after_scroll',
			[
				'label' => __( 'Delay After Scroll Effect', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 's' ],
				'range' => [
					's' => [
						'min' => 0,
						'max' => 10,
						'step' => 0.1,
					],					
				],
				'default' => [
					'unit' => 's',
					'size' => 4,
				],
				
			]
		);

		$this->add_control(
			'hr2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'scroll_velocity',
			[
				'label' => __( 'Scroll Down Speed', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 's' ],
				'range' => [
					's' => [
						'min' => 0,
						'max' => 10,
						'step' => 0.1,
					],					
				],
				'default' => [
					'unit' => 's',
					'size' => 3,
				],
				
			]
		);

		$this->add_control(
			'slide_speed',
			[
				'label' => __( 'Slide to Right Speed', 'wn_webpage_slider_elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 's' ],
				'range' => [
					's' => [
						'min' => 0,
						'max' => 5,
						'step' => 0.1,
					],					
				],
				'default' => [
					'unit' => 's',
					'size' => 0.6,
				],
				
			]
		);

		$this->end_controls_section();
	}

	protected function render()	{
		$settings = $this->get_settings_for_display();
		
		?>
		<style>

		.general {
			position: relative;
			display: block;
			padding-top: <?php echo esc_attr($settings['height']['size'] + ($settings['width']['size'] * 0.0766667 /2 ) . 'px');?>;
			padding-bottom: 0px; 
		}

		.common_class {
			display: block;
			width: 50%;
			height: 300px;
			text-align: center;
			bottom: 0%
			
		}
		.wn_webpage_slider_main {			
			/* background-color: red; */
			background-image: url('<?php echo esc_attr($settings['image1']['url']); ?>'), url('<?php echo esc_attr($settings['image3']['url']); ?>');
			background-repeat: no-repeat, no-repeat;
			margin-right: auto;
			margin-left: auto;
			background-size: cover;
			background-position: 0px 0%, -<?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?> 0%;
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			width: <?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?>;
			height: <?php echo esc_attr($settings['height']['size'] . $settings['height']['unit']); ?>;
			z-index: 3;
			
		}

		


		.scroll_down {
			background-position: 0px 100%, -<?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?> 0%;	
			transition: <?php echo esc_attr($settings['scroll_velocity']['size']); ?>s ease;
		}


		.slide_right { 
			
			transition: <?php echo esc_attr($settings['slide_speed']['size'] / 2) ; ?>s linear !important;
		}		

		.slide_right_fast { 
			
			transition: <?php echo esc_attr($settings['slide_speed']['size'] / 2) ; ?>s linear !important;
		}

		.slide_right_main { 
			
			transition: <?php echo esc_attr($settings['slide_speed']['size'] / 2) ; ?>s linear !important;
		}

		.slide_right_fast_main { 
			
			transition: <?php echo esc_attr($settings['slide_speed']['size'] / 2) ; ?>s linear  !important;
		}


		.wn_webpage_slider_left {			
			/* background-color: red; */
			background-image: url('<?php echo esc_attr($settings['image2']['url']); ?>'), url('<?php echo esc_attr($settings['image1']['url']); ?>');
			background-repeat: no-repeat, no-repeat;
			margin-right: auto;
			margin-left: auto;
			background-size: cover;
			background-position: 0px 0%, -<?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?> 0%;
			position: absolute;
			left: calc(50% - <?php echo esc_attr($settings['horizontal_separation']['size'] . $settings['horizontal_separation']['unit']); ?>);
			transform: translateX(-50%) translateX(-50%);
			width: <?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?>;
			height: <?php echo esc_attr($settings['vertical_separation']['size'] . $settings['vertical_separation']['unit']); ?> ;
			z-index: 2;			
		}

		
		.wn_webpage_slider_right {			
			/* background-color: red; */
			background-image: url('<?php echo esc_attr($settings['image3']['url']); ?>'), url('<?php echo esc_attr($settings['image2']['url']); ?>');
			background-repeat: no-repeat, no-repeat;
			margin-right: auto;
			margin-left: auto;
			background-size: cover;
			background-position: 0px 0%, -<?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?> 0%;
			position: absolute;
			left:  calc(50% + <?php echo esc_attr($settings['horizontal_separation']['size'] . $settings['horizontal_separation']['unit']); ?>);
			transform: translateX(50%) translateX(-50%);
			width: <?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?>;
			height: <?php echo esc_attr($settings['vertical_separation']['size'] . $settings['vertical_separation']['unit']); ?> ;
			z-index: 1;	
		}

		.final {
			clear: both;
		}
		.wn_webpage_slider_main::before {
			content: '';
			background-color: none;
			background-image: url('<?php echo esc_attr(WN_WEBPAGE_SLIDER_ELEMENTOR_URL . '/images/top-bar.png'); ?>');
			background-size: contain;
			background-repeat: no-repeat;
			display: block;
			width: 100%;
			height: 100%;
			transform: translateY(calc(-<?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?> * 0.0766667));
		}

		.childrens::before {
			content: '';
			background-color: none;
			background-image: url('<?php echo esc_attr(WN_WEBPAGE_SLIDER_ELEMENTOR_URL . '/images/top-bar.png'); ?>');
			background-size: contain;
			background-repeat: no-repeat;
			display: block;
			width: 100%;
			height: 100%;
			transform: translateY(calc(-<?php echo esc_attr($settings['width']['size'] . $settings['width']['unit']); ?> * 0.0766667));
		}
	

		</style>


		<div class="general">
			<div class="common_class wn_webpage_slider_left childrens animate"></div>
			<div class="common_class wn_webpage_slider_main"></div>
			<div class="common_class wn_webpage_slider_right childrens animate"></div>
			

			<div class="final"></div>

		</div>

		
			
		</div>

		<script>
			var interval;			
			var before_interval;
			var interval_second;
			var interval_last;

			clearInterval(before_interval);
			clearInterval(interval);
			clearInterval(interval_second);
			clearInterval(interval_last);
			var ronda = 1;

			jQuery('.animate').removeClass('slide_right');
			jQuery('.animate').removeClass('slide_right_fast');
			jQuery('.wn_webpage_slider_main').removeClass('slide_right_main');
			jQuery('.wn_webpage_slider_main').removeClass('slide_right_fast_main');
			jQuery('.wn_webpage_slider_main').removeClass('scroll_down');

			var last = function() {
				
				interval_last = setInterval(function(){

					clearInterval(interval_last);


					if(ronda == 1) {
						
						jQuery('.wn_webpage_slider_main').css('background-image', 'url("<?php echo esc_attr($settings['image3']['url'] );?>"), url("<?php echo esc_attr($settings['image2']['url'] );?>")');
						jQuery('.wn_webpage_slider_left').css('background-image', 'url("<?php echo esc_attr($settings['image1']['url'] );?>"), url("<?php echo esc_attr($settings['image3']['url'] );?>")');
						jQuery('.wn_webpage_slider_right').css('background-image', 'url("<?php echo esc_attr($settings['image2']['url'] );?>"), url("<?php echo esc_attr($settings['image1']['url'] );?>")');
						
					}

					if(ronda == 2) {
						jQuery('.wn_webpage_slider_main').css('background-image', 'url("<?php echo esc_attr($settings['image2']['url'] );?>"), url("<?php echo esc_attr($settings['image1']['url'] );?>")');
						jQuery('.wn_webpage_slider_left').css('background-image', 'url("<?php echo esc_attr($settings['image3']['url'] );?>"), url("<?php echo esc_attr($settings['image2']['url'] );?>")');
						jQuery('.wn_webpage_slider_right').css('background-image', 'url("<?php echo esc_attr($settings['image1']['url'] );?>"), url("<?php echo esc_attr($settings['image3']['url'] );?>")');
						
					}

					if(ronda == 3) {
						jQuery('.wn_webpage_slider_main').css('background-image', 'url("<?php echo esc_attr($settings['image1']['url'] );?>"), url("<?php echo esc_attr($settings['image3']['url'] );?>")');
						jQuery('.wn_webpage_slider_left').css('background-image', 'url("<?php echo esc_attr($settings['image2']['url'] );?>"), url("<?php echo esc_attr($settings['image1']['url'] );?>")');
						jQuery('.wn_webpage_slider_right').css('background-image', 'url("<?php echo esc_attr($settings['image3']['url'] );?>"), url("<?php echo esc_attr($settings['image2']['url'] );?>")');
						
					}
					if(ronda != 3) ronda++; else ronda = 1;

					jQuery('.animate').removeClass('slide_right');
					jQuery('.animate').removeClass('slide_right_fast');	

					jQuery('.wn_webpage_slider_main').removeClass('slide_right_main');
					jQuery('.wn_webpage_slider_main').removeClass('slide_right_fast_main');
					jQuery('.wn_webpage_slider_main').removeClass('scroll_down');
					
					before_first();
							
				}, <?php echo esc_attr($settings['slide_speed']['size'] * 1000);?>);
			}

			var before_first = function() {
				
				before_interval = setInterval(function(){ 
					clearInterval(before_interval);
					jQuery('.wn_webpage_slider_main').addClass('scroll_down');				
					first();
							
				}, <?php echo esc_attr($settings['frequency']['size'] * 1000);?>);
			}

			var first = function() {
				
				interval = setInterval(function(){ 
					clearInterval(interval);
			
					jQuery('.animate').addClass('slide_right');	
					jQuery('.wn_webpage_slider_main').addClass('slide_right_main');			
					second();
				
							
				}, <?php echo (esc_attr($settings['scroll_velocity']['size'] * 1000) + ($settings['delay_after_scroll']['size'] * 1000)); ?>);
			}

			var second = function() {
				
				interval_second = setInterval(function(){ 
				clearInterval(interval_second);

				jQuery('.animate').addClass('slide_right_fast');
				jQuery('.wn_webpage_slider_main').addClass('slide_right_fast_main');	

				last();

				}, <?php echo esc_attr($settings['slide_speed']['size'] * 1000 / 2); ?>);
			}
		
			before_first();

		</script>

		<?php
			
		
	}
	protected function _content_template()
	{
	}
}

