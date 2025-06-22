<?php
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Feature Options',
            'menu_title'    => 'Feature Options',
            'menu_slug'     => 'theme-feature-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false,
            'position'       => 5,
            'icon_url'       => 'dashicons-image-filter',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Team Options',
            'menu_title'    => 'Team Options',
            'menu_slug'     => 'theme-team-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false,
            'position'       => 6,
            'icon_url'       => 'dashicons-admin-users',
        ));
    }