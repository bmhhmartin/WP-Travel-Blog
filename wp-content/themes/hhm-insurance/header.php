
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <?php wp_head();?>
    </head>

    <body <?php body_class();?>>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <?php
                                    $location_text = get_field('location_text', 'option');
                                    $location_link = get_field('location_link', 'option');
                                    $our_email = get_field('our_email', 'option');
                                ?>
                                <a href="<?php echo $location_link;?>" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i><?php echo $location_text?></a>
                            </div>
                            <div class="ps-3">
                                <a href="mailto:<?php echo $our_email ?>" class="text-muted small">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    <?php echo $our_email?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <?php
                                    $facebook = get_field('facebook', 'option');
                                    $linkedin = get_field('linkedin', 'option');
                                    $instagram = get_field('instagram', 'option');
                                ?>
                                <a class="btn p-0 text-primary me-3" href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-primary me-3" href="<?php echo $linkedin; ?>"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="<?php echo $instagram; ?>"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Bangla</a>
                                    <a href="#" class="dropdown-item">French</a>
                                    <a href="#" class="dropdown-item">Spanish</a>
                                    <a href="#" class="dropdown-item">Arabic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="<?php echo home_url();?>" class="navbar-brand p-0">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                echo '<p>' . 'Insurance' . '</p>';
                            }
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => 'navbar-nav mx-0 mx-lg-auto main-header',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 2,
                            ));
                        ?>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>

                        <div class="d-flex flex-column ms-3">
                            <span><?php echo esc_html(get_theme_mod('header_call_text', 'Call to Our Experts')); ?></span>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('header_phone_number', '+0123 456 7890')); ?>">
                                <span class="text-dark"><?php echo esc_html(get_theme_mod('header_phone_number', '+0123 456 7890')); ?></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->