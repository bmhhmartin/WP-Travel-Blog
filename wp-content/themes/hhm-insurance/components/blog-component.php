    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">From Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>

            <?php
                $main_post = array(
                        'posts_per_page' => 10,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                );
                $main_query = new WP_Query($main_post);
            ?>
            <div class="row g-4 justify-content-center">
                <?php if ( $main_query->have_posts() ) : ?>
                <?php while ( $main_query->have_posts() ) : $main_query->the_post(); ?>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                            <?php endif; ?>
                            <div class="tag__cover">
                                <?php echo get_the_tag_list('<ul class="tag__list"><li>', '</li><li>', '</li></ul>'); ?>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> <?php the_author();?></div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> <?php the_date();?></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> <?php comments_number();?></div>
                            </div>
                            <a href="<?php the_permalink();?>" class="h4 d-inline-block mb-3" style="min-height: 57px;"><?php the_title();?></a>
                            <p class="mb-3"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>
                            <a href="<?php the_permalink();?>" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <p class="error_msg">
                        <?php echo "No posts found"; ?>
                    </p>
                <?php endif; ?>

            </div>



        </div>
    </div>
    <!-- Blog End -->