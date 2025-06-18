<?php

function hhm_insurance_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Left Area', 'hhm_insurance'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will appear in the footer left side.', 'hhm_insurance'),
        'before_widget' => '<div class="footer-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<div>',
        'after_title'   => '</div>',
    ));


    register_sidebar(array(
        'name'          => __('Footer Menu Area', 'hhm_insurance'),
        'id'            => 'footer-2',
        'description'   => __('Widgets in this area will appear in the footer left side.', 'hhm_insurance'),
        'before_widget' => '<div class="footer-menu">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-white mb-4">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Description Area', 'hhm_insurance'),
        'id'            => 'footer-3',
        'description'   => '',
        'before_widget' => '<div class="footer-description">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-white mb-4">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'hhm_insurance_register_footer_widgets');
