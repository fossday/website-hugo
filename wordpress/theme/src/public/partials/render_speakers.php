<?php
    $data = get_posts(array(
        'showposts' => -1,
        'post_type' => 'talks',
        'tax_query' => array(
            array(
            'taxonomy' => 'city_events',
            'field' => 'slug',
            'terms' => $post->post_name)
        ))
    );

    $authors = array();

    foreach ($data as $post) { 
        setup_postdata($post);
        
        if (get_the_author_meta('user_login') !== 'zumbi' && !in_array(get_the_author_meta('ID'), $authors) ){?>
        <div class="col-12 col-sm-4 col-lg-3">
            <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms" data-toggle="modal"
                data-target="#modal-<?php echo get_the_author_meta('ID'); ?>">
                <!-- Thumb -->
                <div class="speaker-single-thumb">
                    <?php echo get_avatar(get_the_author_meta('user_email'), $size = '500', $default, $alt, $args = array('class' => 'round'));?>
                </div>
                <!-- Info -->
                <div class="speaker-info">
                    <h5><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h5>
                    <p><?php the_author_meta('professional_title'); ?></p>
                </div>
            </div>
        </div>

        <!-- Special Modal -->
        <!-- Modal -->
        <div class="modal fade" id="modal-<?php echo get_the_author_meta('ID'); ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><svg height="24" width="24" viewBox="0 0 24 24" class="c01222">
                                    <path
                                        d="M19,6.41L17.59,5,12,10.59,6.41,5,5,6.41,10.59,12,5,17.59,6.41,19,12,13.41,17.59,19,19,17.59,13.41,12z">
                                    </path>
                                </svg></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="speaker-modal-thumb">
                                    <?php echo get_avatar(get_the_author_meta('user_email'), $size = '500', $default, $alt, $args = array('class' => 'round'));?>
                                </div>
                            </div>
                            <div class="col-8">
                                <h3><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h3>
                                <p><?php the_author_meta('professional_title'); ?></p>
                            </div>
                            <hr>
                            <div class="col-12 social-info-bio">
                                <p class="social-profile-bio"><?php the_author_meta('description'); ?></p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <!-- Social Info -->
                                <div class="social-info-modal">
                                    <a href="<?php echo get_the_author_meta('linkedin_profile'); ?>" target="_blank"><i
                                            class="fa fa-linkedin"></i></a>
                                    <a href="<?php echo get_the_author_meta('github_profile'); ?>" target="_blank"><i
                                            class="fa fa-github"></i></a>
                                    <a href="<?php echo get_the_author_meta('facebook_profile'); ?>" target="_blank"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="<?php echo get_the_author_meta('twitter_profile'); ?>" target="_blank"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="<?php echo get_the_author_meta('instagram_profile'); ?>" target="_blank"><i
                                            class="fa fa-instagram"></i></a>
                                    <a href="<?php echo get_the_author_meta('youtube_profile'); ?>" target="_blank"><i
                                            class="fa fa-youtube"></i></a>
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>" target="_blank"><i
                                            class="fa fa-linux"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    $authors[] = get_the_author_meta('ID');

    } 
} ?>