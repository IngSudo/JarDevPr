<?php
function chamber_customizer($wp_customize)
{
    $wp_customize->add_section('chamber_settings', array(
        'title' => __('Chamber Settings', 'chamber'),
        'priority' => 30,
    ));

    // Logo 
    $wp_customize->add_setting('chamber_logo_url');
    $wp_customize->add_control('chamber_logo_url', array(
        'label' => __('Logo URL', 'chamber'),
        'section' => 'chamber_settings',
        'type' => 'url',
    ));

    // Home Image 
    $wp_customize->add_section('chamber_home_image', array(
        'title' => __('Chamber Home Image'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('chamber_home_image', array(
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'chamber_home_image',
            array(
                'label' => __('Home Image'),
                'section' => 'chamber_home_image',
                'mime_type' => 'image',
            )
        )
    );

    // Instagram 
    $wp_customize->add_setting('chamber_instagram');
    $wp_customize->add_control('chamber_instagram', array(
        'label' => __('Instagram URL', 'chamber'),
        'section' => 'chamber_settings',
        'type' => 'url',
    ));

    // Copyright
    $wp_customize->add_setting('chamber_copyright', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('chamber_copyright', array(
        'label' => 'Footer Copyright',
        'section' => 'chamber_settings',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'chamber_customizer');

