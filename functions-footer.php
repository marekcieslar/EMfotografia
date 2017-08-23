<?php
function emfotografia_customize_register_footer ( $wp_customize ) {
    
    $wp_customize->add_section('emfotografia_footer', array(
        'title' => __('Footer', 'emfotografia'),
        'description' => 'edit footer data',
        'priority' => 2
    ));

    $wp_customize->add_setting('emfotografia_footer1_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_footer1_title', array(
        'label' => __('footer1 title', 'emfotografia'),
        'section' => 'emfotografia_footer',
        'setting' => 'emfotografia_footer1_title'
    ));
    $wp_customize->add_setting('emfotografia_footer1_description', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_footer1_description', array(
        'label' => __('footer1 title', 'emfotografia'),
        'section' => 'emfotografia_footer',
        'setting' => 'emfotografia_footer1_description',
        'type' => 'textarea'
    ));
}

add_action( 'customize_register', 'emfotografia_customize_register_footer' );
?>