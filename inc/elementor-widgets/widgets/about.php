<?php
namespace Roboticselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Robotics elementor section widget.
 *
 * @since 1.0
 */
class Robotics_About extends Widget_Base {

	public function get_name() {
		return 'robotics-about';
	}

	public function get_title() {
		return __( 'About', 'robotics-companion' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'robotics-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About Us', 'robotics-companion' ),
			]
		);
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'robotics-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We’ve made a life that will change you', 'robotics-companion' )
            ]
        );

        $this->add_control(
            'subtitlebottom',
            [
                'label' => esc_html__( 'Sub Title Bottom', 'robotics-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We are here to listen from you deliver exellence', 'robotics-companion' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button Label', 'robotics-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Get Details', 'robotics-companion' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label' => esc_html__( 'Button Url', 'robotics-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Contact', 'robotics-companion' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => esc_html__( 'inappropriate behaviour is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.', 'robotics-companion' )
            ]
        );
        $this->add_control(
            'img',
            [
                'label' => esc_html__( 'Image', 'robotics-companion' ),
                'type' => Controls_Manager::MEDIA,
            ]
        );

		$this->end_controls_section(); // End about content


        //------------------------------ Style Content ------------------------------

        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Color', 'robotics-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_subtitlebottom', [
                'label'     => __( 'Sub Title Bottom', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Description Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Button Style ------------------------------
         *
         */

        $this->start_controls_section(
            'buttonstyle', [
                'label' => __( 'Style Button', 'robotics-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_label', [
                'label'     => __( 'Label Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(15,0,1,0)',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'robotics-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .home-about-right .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */

        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'robotics-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'robotics-companion' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'robotics-companion' ),
                'label_off' => __( 'Hide', 'robotics-companion' ),
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'robotics-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionoverlaybg',
                'label' => __( 'Overlay', 'robotics-companion' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .home-about-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'robotics-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'robotics-companion' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .home-about-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="home-about-area">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container-fluid">
            <div class="row align-items-center">
                <?php 
                if( ! empty( $settings['img']['url'] ) ):
                ?>
                <div class="col-lg-6 home-about-left no-padding">
                    <?php 
                    echo robotics_img_tag(
                        array(
                            'url' => esc_url( $settings['img']['url'] ),
                            'class' => esc_attr( 'mx-auto d-block img-fluid' ),
                        )
                    );
                    ?>
                </div>
                <?php 
                endif;
                ?>
                <div class="col-lg-6 home-about-right no-padding">
                    <?php 
                    // Title
                    if( ! empty( $settings['title'] ) ) {
                        echo robotics_heading_tag(
                            array(
                                'tag'   => 'h1',
                                'text'  => esc_html( $settings['title'] )
                            )
                        );
                    }
                    // Sub Title 2
                    if( ! empty( $settings['subtitlebottom'] ) ) {
                        echo robotics_heading_tag(
                            array(
                                'tag'   => 'h5',
                                'text'  => esc_html( $settings['subtitlebottom'] )
                            )
                        );
                    }
                    // Content
                    if( ! empty( $settings['content'] ) ) {

                        echo robotics_get_textareahtml_output( $settings['content'] );
                    }
                    //
                    if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                        echo robotics_anchor_tag(
                            array(
                                'text'   => esc_html( $settings['btnlabel'] ),
                                'url'    => esc_url( $settings['btnurl'] ),
                                'class'  => 'primary-btn text-uppercase',
                            )
                        );
                    }

                    ?>
                </div>
            </div>
        </div>  
    </section>

    <?php

    }

}
