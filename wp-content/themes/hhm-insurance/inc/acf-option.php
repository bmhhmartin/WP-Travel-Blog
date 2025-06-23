<?php
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Feature Options',
            'menu_title'    => 'Feature Options',
            'menu_slug'     => 'theme-feature-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true,
            'position'       => 5,
            'icon_url'       => 'dashicons-image-filter',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Feature Top Part',
            'menu_title'    => 'Feature Top Part',
            'menu_slug'     => 'theme-feature-top-settings',
            'parent_slug'   => 'theme-feature-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Feature Cards',
            'menu_title'    => 'Feature Cards',
            'menu_slug'     => 'theme-feature-cards-settings',
            'parent_slug'   => 'theme-feature-settings',
            'capability'    => 'edit_posts',
        ));
        //Feature option ends

        acf_add_options_page(array(
            'page_title'    => 'Team Options',
            'menu_title'    => 'Team Options',
            'menu_slug'     => 'theme-team-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true,
            'position'       => 6,
            'icon_url'       => 'dashicons-admin-users',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Team Top Part',
            'menu_title'    => 'Team Top Part',
            'menu_slug'     => 'theme-team-top-settings',
            'parent_slug'   => 'theme-team-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Team Cards',
            'menu_title'    => 'Team Cards',
            'menu_slug'     => 'theme-team-cards-settings',
            'parent_slug'   => 'theme-team-settings',
            'capability'    => 'edit_posts',
        ));

        //team option ends
        acf_add_options_page(array(
            'page_title'    => 'Service Options',
            'menu_title'    => 'Service Options',
            'menu_slug'     => 'theme-service-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true,
            'position'       => 7,
            'icon_url'       => 'dashicons-pressthis',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Service Top Part',
            'menu_title'    => 'Service Top Part',
            'menu_slug'     => 'theme-service-top-settings',
            'parent_slug'   => 'theme-service-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Service Cards',
            'menu_title'    => 'Service Cards',
            'menu_slug'     => 'theme-service-cards-settings',
            'parent_slug'   => 'theme-service-settings',
            'capability'    => 'edit_posts',
        ));



    }
