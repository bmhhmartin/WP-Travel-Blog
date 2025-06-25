<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            <?php
            if (is_home()) {
                echo 'Blog';
            } elseif (is_singular()) {
                the_title();
            } elseif (is_search()) {
                echo 'Search Results';
            } elseif (is_404()) {
                echo 'Page Not Found';
            } elseif (is_archive()) {
                the_archive_title();
            } else {
                wp_title('');
            }
            ?>
        </h4>

        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>

            <?php if (is_home()) : ?>
                <li class="breadcrumb-item active text-primary">Blog</li>

            <?php elseif (is_category() || is_single()) : ?>
                <li class="breadcrumb-item">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a>
                </li>
                <?php if (is_single()) : ?>
                    <li class="breadcrumb-item"><?php the_category(', '); ?></li>
                    <li class="breadcrumb-item active text-primary"><?php the_title(); ?></li>
                <?php endif; ?>

            <?php elseif (is_page() && $post->post_parent) : ?>
                <?php
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) :
                    ?>
                    <li class="breadcrumb-item">
                        <a href="<?php echo get_permalink($ancestor); ?>">
                            <?php echo get_the_title($ancestor); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="breadcrumb-item active text-primary"><?php the_title(); ?></li>

            <?php elseif (is_page()) : ?>
                <li class="breadcrumb-item active text-primary"><?php the_title(); ?></li>

            <?php elseif (is_search()) : ?>
                <li class="breadcrumb-item active text-primary">Search Results for "<?php echo get_search_query(); ?>"</li>

            <?php elseif (is_404()) : ?>
                <li class="breadcrumb-item active text-primary">Page Not Found</li>

            <?php elseif (is_archive()) : ?>
                <li class="breadcrumb-item active text-primary"><?php the_archive_title(); ?></li>

            <?php endif; ?>
        </ol>
    </div>
</div>
