<?php
function emfotografia_customize_register_portfolio ( $wp_customize ) {
    
    $wp_customize->add_section('emfotografia_portfolio', array(
        'title' => __('Portfolio', 'emfotografia'),
        'description' => 'edit Portfolio images and links',
        'priority' => 1
    ));

    $wp_customize->add_setting('emfotografia_rotator_interval', array(
        'default' => 4500
    ));
    $wp_customize->add_control('emfotografia_rotator_interval', array(
        'label' => __('rotator interval time', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_interval'
    ));
}

add_action( 'customize_register', 'emfotografia_customize_register_portfolio' );
?>