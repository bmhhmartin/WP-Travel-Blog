<?php

function hhm_insurance_header_mobile($wp_customize) {
    // Add section
    $wp_customize->add_section('header_contact', array(
        'title'    => __('Header Contact Info', 'hhm_insurance'),
        'priority' => 30,
    ));

    // Phone number setting
    $wp_customize->add_setting('header_phone_number', array(
        'default'   => '+0123 456 7890',
        'transport' => 'refresh',
    ));

    // Phone number control
    $wp_customize->add_control('header_phone_number', array(
        'label'    => __('Phone Number', 'hhm_insurance'),
        'section'  => 'header_contact',
        'type'     => 'text',
    ));

    // Call to action text
    $wp_customize->add_setting('header_call_text', array(
        'default'   => 'Call to Our Experts',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_call_text', array(
        'label'    => __('Call to Action Text', 'hhm_insurance'),
        'section'  => 'header_contact',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'hhm_insurance_header_mobile');