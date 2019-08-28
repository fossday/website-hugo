<?php get_header(); ?>
<!-- End of Get Header  -->

<!-- Init content -->
<section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged));
                        ?>
                        <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php echo get_the_post_thumbnail($_post->ID, array('750','375')) ?>
                                <a href="<?php the_permalink(); ?>" class="blog_item_date">
                                    <h3><?php echo get_the_date('', $post->ID); ?></h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fa fa-user"></i><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a></li>
                                </ul>
                                <?php the_category(); ?>
                            </div>
                        </article>

                        <?php endwhile; ?>

                        <nav class="blog-pagination justify-content-center d-flex">

                        <?php if (have_posts()) : ?>

                        <?php next_posts_link('Carregar mais posts'); ?>

                        <?php else : ?>
                        <p><?php _e('Ops. Acho que não temos mais nada por aqui :('); ?></p>
                        <?php endif; ?>

                        </nav>
                    </div>
                </div>
 
                <!-- Sidebar -->
                <?php get_sidebar(); ?>

            </div>
        </div>
    </section>

<!-- end of content area -->

<!-- Get Footer -->

<?php get_footer(); ?>