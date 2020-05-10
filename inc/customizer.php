<?php

function wpcurso_customizer( $wp_customize ){
    // Copyright

    $wp_customize->add_section(
        'sec_copyright', array(
            'title' => 'Copyright',
            'description' => 'Copyright Section'
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod',
            'default' => 'Copyright - All right reserved',
            'Sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label' => 'Copyright',
            'description' => "Choose whether to show the Servises section on not",
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );



    // Map
    $wp_customize->add_section(
        'sec_map', array(
            'title' => 'Map',
            'description' => 'Map Section'
        )
    );

    //API KEY
    $wp_customize->add_setting(
        'set_map_apikey', array(
            'type' => 'theme_mod',
            'default' => '',
            'Sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'set_map_apikey', array(
            'label' => 'API Key',
            'description' => "Get api key in link",
            'section' => 'sec_map',
            'type' => 'text'
        )
    );

    // Address
    $wp_customize->add_setting(
        'set_map_address', array(
            'type' => 'theme_mod',
            'default' => '',
            'Sanitize_callback' => 'esc_textarea'
        )
    );

    $wp_customize->add_control(
        'set_map_address', array(
            'label' => 'Type yout address here',
            'description' => "No special charecteres allowed",
            'section' => 'sec_map',
            'type' => 'textarea'
        )
    );
}

add_action( 'customize_register', 'wpcurso_customizer' );