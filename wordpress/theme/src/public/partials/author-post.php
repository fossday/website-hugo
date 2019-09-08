<!-- Our Blog Area Start -->
<div class="our-blog-area section-padding-100">
        <div class="container">
            <div class="row">

            <?php if (have_posts()) {

                    while (have_posts()) {

                    the_post(); 
                        ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <?php echo get_the_post_thumbnail($_post->ID, array('750','375')) ?>
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href<?php the_permalink(); ?>"><i class="zmdi zmdi-alarm-check"></i> <?php echo get_the_date('', $post->ID); ?></a>
                                <a class="post-author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="zmdi zmdi-account"></i> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="blog-btn">
                            <a href="<?php the_permalink(); ?>"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php }; ?>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="more-blog-btn text-center">
                        <?php next_posts_link('Carregar mais posts'); ?>
                    </div>
                    <?php } else { ?>
                    <p><?php _e('Ops. Acho que não temos mais nada por aqui :('); ?></p>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Area End -->