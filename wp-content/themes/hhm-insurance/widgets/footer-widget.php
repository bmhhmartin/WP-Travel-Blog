<?php

function mytheme_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Left Area', 'mytheme'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will appear in the footer.', 'hhm_insurance'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div>',
        'after_title'   => '</div>',
    ));
}
add_action('widgets_init', 'mytheme_register_footer_widgets');
