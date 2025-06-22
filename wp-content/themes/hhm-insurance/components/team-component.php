<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <?php
            $team_badge = get_field('team_badge', 'option');
            $team_title = get_field('team_title', 'option');
            $team_description = get_field('team_description', 'option');
            ?>
            <?php if ($team_badge): ?>
                <h4 class="text-primary"><?php echo esc_html($team_badge); ?></h4>
            <?php endif; ?>
            <?php if ($team_title): ?>
                <h1 class="display-4 mb-4"><?php echo esc_html($team_title); ?></h1>
            <?php endif; ?>
            <?php if ($team_description): ?>
                <p class="mb-0"><?php echo esc_html($team_description); ?></p>
            <?php endif; ?>
        </div>

        <div class="row g-4">
            <?php if (have_rows('team_card', 'option')): ?>
                <?php while (have_rows('team_card', 'option')): the_row();
                    $team_image = get_sub_field('team_image');
                    $team_member_name = get_sub_field('team_member_name');
                    $team_member_designation = get_sub_field('team_member_designation');
                    $facebook = get_sub_field('facebook');
                    $twitter_url = get_sub_field('twitter_url');
                    $linkedin_url = get_sub_field('linkedin_url');
                    $instagram_url = get_sub_field('instagram_url');
                    ?>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">

                        <div class="team-item">
                            <div class="team-img">
                                <?php
                                    $size = 'full';
                                    if( $team_image ) {
                                        echo wp_get_attachment_image( $team_image, $size );
                                    } ?>
                                <div class="team-icon">
                                    <?php if ($facebook): ?>
                                        <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="<?php echo esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if ($twitter_url): ?>
                                        <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="<?php echo esc_url($twitter_url); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if ($linkedin_url): ?>
                                        <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="<?php echo esc_url($linkedin_url); ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                                    <?php if ($instagram_url): ?>
                                        <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href="<?php echo esc_url($instagram_url); ?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="team-title p-4 text-center">
                                <?php if ($team_member_name): ?>
                                    <h4 class="mb-0"><?php echo esc_html($team_member_name); ?></h4>
                                <?php endif; ?>
                                <?php if ($team_member_designation): ?>
                                    <p class="mb-0"><?php echo esc_html($team_member_designation); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Team End -->
