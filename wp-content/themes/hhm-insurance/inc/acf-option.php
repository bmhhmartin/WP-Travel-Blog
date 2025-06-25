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
        //service options ends
        acf_add_options_page(array(
            'page_title'    => 'Testimonial Options',
            'menu_title'    => 'Testimonial Options',
            'menu_slug'     => 'theme-testimonial-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true,
            'position'       => 8,
            'icon_url'       => 'dashicons-testimonial',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Testimonial Top Part',
            'menu_title'    => 'Testimonial Top Part',
            'menu_slug'     => 'theme-testimonial-top-settings',
            'parent_slug'   => 'theme-testimonial-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Testimonial Cards',
            'menu_title'    => 'Testimonial Cards',
            'menu_slug'     => 'theme-testimonial-cards-settings',
            'parent_slug'   => 'theme-testimonial-settings',
            'capability'    => 'edit_posts',
        ));
        //testimonial options ends
        acf_add_options_page(array(
            'page_title'    => 'Header Options',
            'menu_title'    => 'Header Options',
            'menu_slug'     => 'theme-header-option-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true,
            'position'       => 9,
            'icon_url'       => 'dashicons-rss',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header Logo',
            'menu_title'    => 'Header Logo',
            'menu_slug'     => 'theme-header-logo-settings',
            'parent_slug'   => 'theme-header-option-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header Contact',
            'menu_title'    => 'Header Contact',
            'menu_slug'     => 'theme-header-contact-settings',
            'parent_slug'   => 'theme-header-option-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header Address',
            'menu_title'    => 'Header Address',
            'menu_slug'     => 'theme-header-address-settings',
            'parent_slug'   => 'theme-header-option-settings',
            'capability'    => 'edit_posts',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header Media Links',
            'menu_title'    => 'Header Media Links',
            'menu_slug'     => 'theme-header-media-settings',
            'parent_slug'   => 'theme-header-option-settings',
            'capability'    => 'edit_posts',
        ));
        //header options ends



    }
