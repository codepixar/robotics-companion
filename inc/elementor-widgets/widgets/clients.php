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
class Robotics_Clients extends Widget_Base {

	public function get_name() {
		return 'robotics-clients';
	}

	public function get_title() {
		return __( 'Clients', 'robotics-companion' );
	}

	public function get_icon() {
		return 'eicon-logo';
	}

	public function get_categories() {
		return [ 'robotics-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        
		// ----------------------------------------  Clients content ------------------------------
		$this->start_controls_section(
			'clients_content',
			[
				'label' => __( 'Clients', 'robotics-companion' ),
			]
		);
		$this->add_control(
            'clients', [
                'label' => __( 'Client', 'robotics-companion' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'robotics-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'url',
                        'label' => __( 'Client Url', 'robotics-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => '#'
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Client Logo', 'robotics-companion' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <!-- Start brand Area -->
    <section class="brand-area">
        <div class="container">
            <div class="row">
                <?php 
                if( is_array( $settings['clients'] ) && count( $settings['clients'] ) > 0 ):
                    foreach( $settings['clients'] as $client ):

                $bgUrl = '';
                if( !empty( $client['img']['url'] ) ){
                    $bgUrl = $client['img']['url'];
                }

                ?>
                <a class="col single-brand" href="<?php echo esc_url( $client['url'] ); ?>">
                    <?php 
                    echo robotics_img_tag(
                        array(
                            'url'   => esc_url( $bgUrl ),
                            'class' => esc_attr( 'img-fluid' )
                        )
                    );
                    ?>
                </a>
                <?php
                    endforeach; 
                endif;
                ?>
            </div>  
        </div>  
    </section>
    <!-- End brand Area --> 

    <?php

    }
	
}
