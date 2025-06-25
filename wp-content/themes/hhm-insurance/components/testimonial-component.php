
    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <?php
                    $testimonial_badge = get_field('testimonial_badge', 'option');
                    $testimonial_title = get_field('testimonial_title', 'option');
                    $testimonial_details = get_field('testimonial_description', 'option');
                ?>
                <h4 class="text-primary"><?php echo $testimonial_badge;?></h4>
                <h1 class="display-4 mb-4"><?php echo $testimonial_title;?></h1>
                <p class="mb-0"><?php echo $testimonial_details;?></p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <?php if(have_rows('testimonial_cards', 'option')) : ?>
                    <?php while(have_rows('testimonial_cards', 'option')) : the_row(); ?>
                        <?php
                        $client_image = get_sub_field('client_image', 'option');
                        $client_name = get_sub_field('client_name', 'option');
                        $client_designation = get_sub_field('client_designation', 'option');
                        $client_comments = get_sub_field('client_comments', 'option');
                        $client_review = get_sub_field('client_review', 'option');
                        ?>
                        <div class="testimonial-item bg-light rounded">
                            <div class="row g-0">
                                <div class="col-4  col-lg-4 col-xl-3">
                                    <div class="h-100">
                                        <?php if ($client_image) {
                                            echo wp_get_attachment_image($client_image, 'full', false, array(
                                                'class' => 'img-fluid h-100 rounded object-cover',
                                                'alt' => $client_name,
                                            ));
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 col-xl-9">
                                    <div class="d-flex flex-column my-auto text-start p-4">
                                        <h4 class="text-dark mb-0"><?php echo $client_name; ?></h4>
                                        <p class="mb-3"><?php echo $client_designation; ?></p>
                                        <div class="d-flex text-primary mb-3">
                                            <?php
                                                $stars = $client_review;
                                                for ($i = 0; $i < $stars; $i++) {
                                                    echo '<i class="fas fa-star"></i>';
                                                }
                                            ?>
                                        </div>
                                        <p class="mb-0"><?php echo $client_comments; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>



            </div>
        </div>
    </div>
    <!-- Testimonial End -->