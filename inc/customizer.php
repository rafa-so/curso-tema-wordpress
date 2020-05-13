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

    //Slider
    $wp_customize->add_section(
        'sec_slide', array(
            'title' => 'slider',
            'description' => 'Slider Section'
        )
    );

    $wp_customize->add_setting(
        'set_slider_option', array(
            'type' => 'theme_mod',
            'default' => '1',
            'Sanitize_callback' => 'wpcurso_sanitize_select'
        )
    );

    $wp_customize->add_control(
        'set_slider_option', array(
            'label' => 'Choose your design type here',
            'description' => "Choose your design type",
            'section' => 'sec_slide',
            'type' => 'select',
            'choices' => array(
                '1' => 'Design Type 1',
                '2' => 'Design Type 2',
                '3' => 'Design Type 3',
                '4' => 'Design Type 4',
            )
        )
    );

    // Limit
    $wp_customize->add_setting(
        'set_slider_limit', array(
            'type' => 'theme_mod',
            'default' => '5',
            'Sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_limit', array(
            'label' => 'Number of posts to dislay',
            'description' => "Number of posts to be displayed",
            'section' => 'sec_slide',
            'type' => 'number'
        )
    );
}

add_action( 'customize_register', 'wpcurso_customizer' );

function wpcurso_sanitize_select( $input, $setting ){
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                      
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
}