<?php

/**
 * Customizer area
 */
// register Hero image
function rent4u_customizer_register($wp_customize) {
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'rent4u'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'    => __('Hero Image', 'rent4u'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    )));
}
add_action('customize_register', 'rent4u_customizer_register');