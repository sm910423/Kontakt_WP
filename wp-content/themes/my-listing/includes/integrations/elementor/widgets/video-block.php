<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class CASE27_Elementor_Widget_Video_Block extends Widget_Base {

	public function get_name() {
		return 'case27-video-block-widget';
	}

	public function get_title() {
		return __( '<strong>27</strong> > Video Block', 'my-listing' );
	}

	public function get_icon() {
		// Icon name from the Elementor font file, as per http://dtbaker.net/web-development/creating-your-own-custom-elementor-widgets/
		return 'eicon-youtube';
	}

	protected function _register_controls() {
		$traits = new \CASE27_Elementor_Traits($this);

		$this->start_controls_section(
			'section_content_block',
			[
				'label' => esc_html__( 'Content', 'my-listing' ),
			]
		);

		$this->add_control(
			'the_icon',
			[
			'label' => __( 'Icon', 'my-listing' ),
			'type' => Controls_Manager::ICON,
			]
		);

		$this->add_control(
			'the_title',
			[
				'label' => __( 'Title', 'my-listing' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
			]
		);

		$this->add_control(
			'the_url',
			[
				'label' => __( 'Video URL', 'my-listing' ),
				'type' => Controls_Manager::URL,
				'description' => __( 'Supported video sources are: Youtube, Vimeo, Dailymotion.', 'my-listing' ),
			]
		);

		$this->end_controls_section();

		$traits->block_styles();
	}

	protected function render( $instance = [] ) {

		// dump($this->get_settings());

		c27()->get_section('video-block', [
			'video_url' => $this->get_settings('the_url')['url'],
			'icon' => $this->get_settings('the_icon'),
			'icon_style' => $this->get_settings('the_icon_style'),
			'title' => $this->get_settings('the_title'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new CASE27_Elementor_Widget_Video_Block() );
