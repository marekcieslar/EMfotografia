<?php
function emfotografia_customize_register_portfolio ( $wp_customize ) {
    
    $wp_customize->add_section('emfotografia_portfolio', array(
        'title' => __('Portfolio', 'emfotografia'),
        'description' => 'edit Portfolio images and links',
        'priority' => 3
    ));

    $wp_customize->add_setting('emfotografia_portfolio_1_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_1_title', array(
        'label' => __('image 1 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_1_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_1_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_1_link', array(
        'label' => __('image 1 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_1_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_1_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_1_img',
            array(
                'label' => __('image 1', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_1_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_2_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_2_title', array(
        'label' => __('image 2 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_2_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_2_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_2_link', array(
        'label' => __('image 2 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_2_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_2_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_2_img',
            array(
                'label' => __('image 2', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_2_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_3_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_3_title', array(
        'label' => __('image 3 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_3_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_3_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_3_link', array(
        'label' => __('image 3 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_3_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_3_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_3_img',
            array(
                'label' => __('image 3', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_3_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_4_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_4_title', array(
        'label' => __('image 4 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_4_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_4_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_4_link', array(
        'label' => __('image 4 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_4_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_4_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_4_img',
            array(
                'label' => __('image 4', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_4_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_5_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_5_title', array(
        'label' => __('image 5 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_5_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_5_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_5_link', array(
        'label' => __('image 5 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_5_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_5_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_5_img',
            array(
                'label' => __('image 5', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_5_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_6_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_6_title', array(
        'label' => __('image 6 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_6_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_6_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_6_link', array(
        'label' => __('image 6 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_6_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_6_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_6_img',
            array(
                'label' => __('image 6', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_6_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_7_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_7_title', array(
        'label' => __('image 7 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_7_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_7_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_7_link', array(
        'label' => __('image 7 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_7_link'
    ));

    $wp_customize->add_setting('emfotografia_portfolio_7_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_7_img',
            array(
                'label' => __('image 7', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_7_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_8_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_8_title', array(
        'label' => __('image 8 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_8_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_8_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_8_link', array(
        'label' => __('image 8 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_8_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_8_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_8_img',
            array(
                'label' => __('image 8', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_8_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );

    $wp_customize->add_setting('emfotografia_portfolio_9_title', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control('emfotografia_portfolio_9_title', array(
        'label' => __('image 9 title', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_9_title'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_9_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('emfotografia_portfolio_9_link', array(
        'label' => __('image 9 link', 'emfotografia'),
        'section' => 'emfotografia_portfolio',
        'setting' => 'emfotografia_portfolio_9_link'
    ));
    $wp_customize->add_setting('emfotografia_portfolio_9_img', array(
        'default' => 'emfotografia.eu'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'emfotografia_portfolio_9_img',
            array(
                'label' => __('image 9', 'emfotografia'),
                'section' => 'emfotografia_portfolio',
                'setting' => 'emfotografia_portfolio_9_img',
                'description' => '300x300 px chyba :P',
                'context' => ''
            )
        )
    );
}

add_action( 'customize_register', 'emfotografia_customize_register_portfolio' );
?>