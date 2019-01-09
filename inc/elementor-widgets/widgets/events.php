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
 * Robotics elementor events section widget.
 *
 * @since 1.0
 */
class Robotics_Events extends Widget_Base {

	public function get_name() {
		return 'robotics-events';
	}

	public function get_title() {
		return __( 'Events', 'robotics-companion' );
	}

	public function get_icon() {
		return 'eicon-time-line';
	}

	public function get_categories() {
		return [ 'robotics-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Events Section Heading ------------------------------
        $this->start_controls_section(
            'events_heading',
            [
                'label' => __( 'Events Section Heading', 'robotics-companion' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'robotics-companion' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'robotics-companion' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
		// ----------------------------------------  Events content ------------------------------
		$this->start_controls_section(
			'events_content',
			[
				'label' => __( 'Events', 'robotics-companion' ),
			]
		);
		$this->add_control(
            'events_content_rep', [
                'label' => __( 'Create events', 'robotics-companion' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'robotics-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Event on the rock solid carbon'
                    ],
                    [
                        'name'  => 'url',
                        'label' => __( 'Title Url', 'robotics-companion' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'date',
                        'label' => __( 'Date', 'robotics-companion' ),
                        'type'  => Controls_Manager::DATE_TIME
                    ],
                    [
                        'name'  => 'location',
                        'label' => __( 'Location', 'robotics-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Central government museum',
                        'label_block' => true
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'robotics-companion' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'btnlabel',
                        'label' => __( 'Button Label', 'robotics-companion' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'btnurl',
                        'label' => __( 'Button Url', 'robotics-companion' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Image', 'robotics-companion' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End events content

    /**
     * Style Tab
     * ------------------------------ Style Section ------------------------------
     *
     */

    $this->start_controls_section(
        'style_section', [
            'label' => __( 'Style Section Heading', 'robotics-companion' ),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'color_secttitle', [
            'label'     => __( 'Section Title Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => '#333333',
            'selectors' => [
                '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
            ],
        ]
    );

    $this->add_control(
        'color_sectsubtitle', [
            'label'     => __( 'Section Sub Title Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => '#777',
            'selectors' => [
                '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
            ],
        ]
    );

    $this->end_controls_section();

    //------------------------------ Style Event Box ------------------------------
    $this->start_controls_section(
        'style_eventbox', [
            'label' => __( 'Style Event Content', 'robotics-companion' ),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'color_eventtitle', [
            'label' => __( 'Title Color', 'robotics-companion' ),
            'type'  => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .single-events h4' => 'color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_eventdescription', [
            'label' => __( 'Description Color', 'robotics-companion' ),
            'type'  => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .single-events p' => 'color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_eventdate', [
            'label' => __( 'Date Color', 'robotics-companion' ),
            'type'  => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .single-events .meta span' => 'color: {{VALUE}};',
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
                '{{WRAPPER}} .single-events .primary-btn'   => 'color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_hover_label', [
            'label'     => __( 'Hover Label Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => '#f6214b',
            'selectors' => [
                '{{WRAPPER}} .single-events .primary-btn:hover'   => 'color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_bg', [
            'label'     => __( 'Background Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => '#222',
            'selectors' => [
                '{{WRAPPER}} .single-events .primary-btn' => 'background-color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_hover_bg', [
            'label'     => __( 'Hover Background Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => 'rgba(15,0,1,0)',
            'selectors' => [
                '{{WRAPPER}} .single-events .primary-btn:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_border', [
            'label'     => __( 'Border Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => '',
            'selectors' => [
                '{{WRAPPER}} .single-events .primary-btn' => 'border-color: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'color_hover_border', [
            'label'     => __( 'Hover Border Color', 'robotics-companion' ),
            'type'      => Controls_Manager::COLOR,
            'default'   => '#f6214b',
            'selectors' => [
                '{{WRAPPER}} .single-events .primary-btn:hover' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="upcoming-event-area section-gap">
        <div class="container">
            <?php 
            // Section Heading
            robotics_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">

                <?php 
                if( is_array( $settings['events_content_rep'] ) && count( $settings['events_content_rep'] ) > 0 ):
                    $i = 0;
                    foreach( $settings['events_content_rep'] as $val ):

                    $imgUrl = '';
                    if( !empty( $val['img']['url'] ) ){
                        $imgUrl = $val['img']['url'];
                    }

                    //
                    $topimg = $bottomimg = false;
                    if( $i % 2 == 0 ){
                        $topimg     = true;
                        $eventClass = ' event-left';
                    }else{
                        $bottomimg  = true;
                        $eventClass = ' event-right'; 
                    }

                ?>
                    <div class="col-lg-6<?php echo esc_attr( $eventClass ); ?>">
                        <div class="single-events upcoming-wrap">
                            <?php 
                            // Image top
                            if( $topimg ) {

                                echo robotics_img_tag(
                                    array(
                                        'url' => esc_url( $imgUrl )
                                    )
                                );
                            }
                            // Title
                            if( ! empty( $val['label'] ) ) {

                                $atagstart  = '';
                                $atagend    = '';

                                if( ! empty( $val['url']['url'] ) ) {
                                    $atagstart  = '<a href="'.esc_url( $val['url']['url'] ).'">';
                                    $atagend    = '</a>';

                                }
                                echo wp_kses_post( $atagstart );
                                echo robotics_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $val['label'] )
                                    )
                                );
                                echo wp_kses_post( $atagend );
                            }
                            // Date and location
                            $date     = ( ! empty( $val['date'] ) ) ? '<span>'.$val['date'].'</span>' : '';
                            $location = ( ! empty( $val['location'] ) ) ? $val['location'] : '';

                            echo sprintf( '<p class="meta">%s %s %s</p>', $date, __( 'at', 'robotics-companion' ), $location );
                            // Content
                            if( ! empty( $val['desc'] ) ) {
                                echo robotics_paragraph_tag (
                                    array(
                                        'text'  => esc_html( $val['desc'] ),
                                    )
                                );
                            }
                            // view details
                            if( ! empty( $val['btnurl']['url'] ) && ! empty( $val['btnlabel'] ) ) {
                                echo robotics_anchor_tag(
                                    array(
                                        'url'   => esc_url( $val['btnurl']['url'] ),
                                        'text'  => esc_html( $val['btnlabel'] ),
                                        'class' => 'primary-btn text-uppercase'
                                    )
                                );
                            }
                            // Image bottom
                            if( $bottomimg ) {
                                echo robotics_img_tag(
                                    array(
                                        'url' => esc_url( $imgUrl )
                                    )
                                );
                            }
                            ?>
                        </div>
                    </div>
                <?php 
                    $i++;
                    endforeach;
                endif
                ?>
            </div>
        </div>  
    </section>
    <?php

    }
	
}
