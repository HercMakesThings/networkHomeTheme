<?php
//funtion for customizing top secton images and heading
function nethome_landing_images($wp_customize){
    //declaring new customizer section
    $wp_customize->add_section('nethome_identity_section', array(
        'title' => ' Identity',
        'priority' => 1
    ));

    //setting & Congrol pair for topsec bg
    $wp_customize->add_setting('topsec_identity_bg');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'topsec_identity_bg_control', array(
        'label' => 'Topsec Image',
        'section' => 'nethome_identity_section',
        'settings' => 'topsec_identity_bg',
        'width' => '1920',
        'height' => '1080'
    )));

    //setting & Congrol pair for landing page logo
    $wp_customize->add_setting('first_identity_logo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'landingpage_identity_logo_control', array(
        'label' => 'F.I.R.S.T. Logo Goes Here',
        'section' => 'nethome_identity_section',
        'settings' => 'first_identity_logo',
        'width' => '150',
        'height' => '47'
    )));

    //setting & Congrol pair for introsec bg
    $wp_customize->add_setting('introsec_identity_bg');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'introsec_identity_bg_control', array(
        'label' => 'Intro Section Image',
        'section' => 'nethome_identity_section',
        'settings' => 'introsec_identity_bg',
        'width' => '1920',
        'height' => '1080'
    )));

    //setting & Congrol pair for raspsec bg
    $wp_customize->add_setting('raspsec_identity_bg');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'raspsec_identity_bg_control', array(
        'label' => 'Rasp Section Image',
        'section' => 'nethome_identity_section',
        'settings' => 'raspsec_identity_bg',
        'width' => '1920',
        'height' => '1080'
    )));

    //setting & Congrol pair for dfvpsec bg
    $wp_customize->add_setting('dfvpsec_identity_bg');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'dfvpsec_identity_bg_control', array(
        'label' => 'Dfvp Section Image',
        'section' => 'nethome_identity_section',
        'settings' => 'dfvpsec_identity_bg',
        'width' => '1920',
        'height' => '1080'
    )));

    //setting & Congrol pair for gdwdsec bg
    $wp_customize->add_setting('gdwdsec_identity_bg');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'gdwdsec_identity_bg_control', array(
        'label' => 'Gdwd Section Image',
        'section' => 'nethome_identity_section',
        'settings' => 'gdwdsec_identity_bg',
        'width' => '1920',
        'height' => '1080'
    )));

    //setting & Congrol pair for single portfolio post template logo before redirection happens
    $wp_customize->add_setting('first_redir_logo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'first_redir_logo_control', array(
        'label' => 'Redirection Page Logo Goes Here',
        'section' => 'nethome_identity_section',
        'settings' => 'first_redir_logo',
        'width' => '250',
        'height' => '94'
    )));

}

add_action('customize_register', 'nethome_landing_images');

?>