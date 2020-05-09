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
}

add_action( 'customize_register', 'wpcurso_customizer' );