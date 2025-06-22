<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <?php
            $feature_badge = get_field('feature_badge', 'option');
            $feature_title = get_field('feature_title', 'option');
            $feature_description = get_field('feature_description', 'option');
            ?>
            <?php if ($feature_badge): ?>
                <h4 class="text-primary"><?php echo esc_html($feature_badge); ?></h4>
            <?php endif; ?>
            <?php if ($feature_title): ?>
                <h1 class="display-4 mb-4"><?php echo esc_html($feature_title); ?></h1>
            <?php endif; ?>
            <?php if ($feature_description): ?>
                <p class="mb-0"><?php echo esc_html($feature_description); ?></p>
            <?php endif; ?>
        </div>

        <div class="row g-4">
            <?php if( have_rows('feature_card', 'option') ): ?>
                <?php while( have_rows('feature_card', 'option') ) : the_row();
                    $card_icon = get_sub_field('card_icon');
                    $card_title = get_sub_field('card_title');
                    $card_description = get_sub_field('card_description');
                    $card_button = get_sub_field('card_button');
                    $card_button_url = get_sub_field('card_button_url');
                    ?>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <?php echo $card_icon; // assuming it's HTML-safe ?>
                            </div>
                            <h4 class="mb-4"><?php echo esc_html($card_title); ?></h4>
                            <p class="mb-4"><?php echo esc_html($card_description); ?></p>
                            <?php if ($card_button && $card_button_url): ?>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="<?php echo esc_url($card_button_url); ?>">
                                    <?php echo esc_html($card_button); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <h2 class="text-center">No Cards Found</h2>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
