<?php
    /* Template Name: Homepage Template */
    get_header();

    get_template_part('components/hero-banner');
    get_template_part('components/our-features');
    get_template_part('components/about-component');
    get_template_part('components/service-component');
    get_template_part('components/faq-component');
    get_template_part('components/blog-component');
    get_template_part('components/team-component');
    get_template_part('components/testimonial-component');

    get_footer();