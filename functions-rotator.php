<?php
function emfotografia_customize_register_rotator ( $wp_customize ) {

    $wp_customize->add_section('emfotografia_rotator', array(
        'title' => __('Rotator', 'dwg'),
        'description' => 'edit rotator images',
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

    $wp_customize->add_setting('emfotografia_rotator_1_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_1_title', array(
        'label' => __('rotator LAST image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_1_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_1_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_1_img',
            array(
                'label' => __('rotator LAST image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_1_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_rotator_2_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_2_title', array(
        'label' => __('rotator FIRST image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_2_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_2_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_2_img',
            array(
                'label' => __('rotator FIRST image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_2_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_rotator_3_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_3_title', array(
        'label' => __('rotator 2nd image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_3_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_3_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_3_img',
            array(
                'label' => __('rotator 2nd image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_3_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_rotator_4_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_4_title', array(
        'label' => __('rotator 3rd image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_4_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_4_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_4_img',
            array(
                'label' => __('rotator 3rd image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_4_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_rotator_5_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_5_title', array(
        'label' => __('rotator 4th image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_5_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_5_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_5_img',
            array(
                'label' => __('rotator 4th image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_5_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_rotator_6_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_6_title', array(
        'label' => __('rotator 5th image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_6_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_6_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_6_img',
            array(
                'label' => __('rotator 5th image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_6_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_rotator_7_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_rotator_7_title', array(
        'label' => __('rotator 6th image', 'emfotografia'),
        'section' => 'emfotografia_rotator',
        'setting' => 'emfotografia_rotator_7_title'
    ));
    $wp_customize->add_setting('emfotografia_rotator_7_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_rotator_7_img',
            array(
                'label' => __('rotator 6th image', 'emfotografia'),
                'section' => 'emfotografia_rotator',
                'setting' => 'emfotografia_rotator_7_img',
                'description' => '1920x900 px',
                'context' => ''
            )
        )
    );
}

add_action( 'customize_register', 'emfotografia_customize_register_rotator' );
?>