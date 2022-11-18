<?php

namespace Elementor_Luaitech_Pack\Widgets;

use Elementor\Widget_Base;

class WidgetB extends Widget_Base
{

	public function get_name()
	{
		return __('Botão customizado', 'elementor-luaitech-addon');
	}

	public function get_title()
	{
		return esc_html__('Botão customizado', 'elementor-luaitech-addon');
	}

	public function get_icon()
	{
		return 'eicon-header';
	}

	public function get_categories()
	{
		return ['general'];
	}

	public function get_keywords()
	{
		return ['luaitech', 'btn', 'custom button'];
	}
	public function get_custom_help_url()
	{
		return 'https://elementor.com/docs/hello-world-widget/';
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'elementor-luaitech-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(

			'title',
			[
				'label' => esc_html__('Title', 'elementor-luaitech-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Seu titulo', 'elementor-luaitech-addon'),
				'default' => esc_html__('Quero o meu livro agora', 'elementor-luaitech-addon'),
			],

		);





		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{
		$settings = $this->get_settings_for_display();

		if ($settings) { ?>
			
				<div class="unlock-btn">
					<a href="#prices" class="playBtn"><?php echo $settings['title']; ?></a>
			</div>
		<?php } ?>
<?php
	}
}
