     <!-- Service Start -->
     <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                <?php $top_badge = get_field('service_badge', 'option')?>
                <?php $top_title = get_field('service_title', 'option')?>
                <?php $top_desc  = get_field('service_description', 'option')?>

                <h4 class="text-primary"><?php echo $top_badge?></h4>
                <h1 class="display-4 mb-4"><?php echo $top_title?></h1>
                <p class="mb-0"><?php echo $top_desc?></p>
            </div>
            <div class="row g-4 justify-content-center">

                <?php if (have_rows('service_card', 'option')): ?>
                    <?php while(have_rows('service_card', 'option')): the_row();
                        $service_image = get_sub_field('service_image');
                        $service_icon = get_sub_field('service_icon');
                        $service_title = get_sub_field('service_title');
                        $service_description = get_sub_field('service_description');
                        $service_button_text = get_sub_field('service_button_text');
                        $service_button_url = get_sub_field('service_button_url');
                    ?>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <?php if ($service_image) {
                                        echo wp_get_attachment_image($service_image, 'full', false, array(
                                            'class' => 'img-fluid rounded-top w-100',
                                            'alt' => $service_title,
                                        ));
                                    }
                                    ?>
                                    <div class="service-icon p-3">
                                        <?php echo $service_icon?>
                                    </div>
                                </div>
                                <div class="service-content p-4">
                                    <div class="service-content-inner">
                                        <a href="#" class="d-inline-block h4 mb-4"> <?php echo $service_title?></a>
                                        <p class="mb-4"> <?php echo $service_description?></p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href=" <?php echo $service_button_url?>"> <?php echo $service_button_text?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php $bottom_menu_text = get_field('bottom_menu_text', 'option')?>
                <?php $bottom_menu_url = get_field('$bottom_menu_url', 'option')?>

                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo $bottom_menu_url;?>"><?php echo $bottom_menu_text;?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->