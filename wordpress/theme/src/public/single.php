<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_header(); ?>
<!-- End of Get Header  -->

<!-- Init content -->

<!-- Blog Area Start -->
<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Details Area -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="pr-lg-4 mb-100">
                    <!-- Post Content -->
                    <div class="post-details-content">

                        <!-- Post Title -->
                        <h4 class="post-title"><?php the_title(); ?></h4>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-date"><i class="zmdi zmdi-alarm-check"></i><?php the_date('j \d\e F \d\e Y'); ?></a>
                            <a class="post-author"
                                href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><i
                                    class="zmdi zmdi-account"></i> <?php the_author_meta('first_name'); ?>
                                <?php the_author_meta('last_name'); ?></a>
                        </div>

                        <!-- Post Thumbnail -->
                        <div class="post-blog-thumbnail mb-30">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'large'); ?>
                        </div>

                        <?php the_content(); ?>

                    </div>

                    <!-- Post Tags & Social Info -->
                    <div class="post-tags-social-area mt-30 pb-5 d-flex flex-wrap align-items-center">
                        <!-- Popular Tags -->
                        <div class="popular-tags d-flex align-items-center">
                            <p><i class="zmdi zmdi-label"></i></p>
                            <?php the_category(); ?>
                        </div>

                        <!-- Author Social Info -->
                        <div class="author-social-info">
                            <a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>"><i
                                    class="fa fa-twitter"></i></a>
                            <a
                                href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><i
                                    class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center my-5">
                        <!-- Avatar -->
                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('user_email'), $size = '96', $default, $alt, $args = array('class' => 'round'));?>
                        </div>
                        <!-- Author Content -->
                        <div class="author-content">
                            <h5><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h5>
                            <span><?php the_author_meta('professional_title'); ?></span>
                            <p><?php the_author_meta('description'); ?></p>
                        </div>
                    </div>

                    <!-- Pager Area -->
                    <div class="pager-area d-flex align-items-center flex-wrap mb-80">
                        <!-- Prev Post -->
                        <div class="pager-single-post d-flex align-items-center">
                            <div class="post-meta">
                                <?php previous_post_link(); ?>
                                <span>+ Palestras</span>
                            </div>
                        </div>

                        <!-- Next Post -->
                        <div class="pager-single-post d-flex align-items-center">
                            <div class="post-meta">
                                <?php next_post_link(); ?>
                                <span>+ Palestras</span>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Area -->
                    <div class="comment-area mb-80">
                        <!-- Comments Area -->
                        <div class="comment_area clearfix">
                            <h4 class="mb-30">Comentários</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="confer-sidebar-area mb-100">

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <h5 class="widget-title mb-30">Postagens recentes</h5>

                         <!-- Single Recent Post Area -->
                        <?php 
                            $related = new WP_Query(array('posts_per_page' => 5));
                            
                            if( $related->have_posts() ) { 
                                while( $related->have_posts() ) { 
                                    $related->the_post(); ?>

                        <div class="single-recent-post-area d-flex align-items-center">
                            <!-- Thumb -->
                            <div class="post-thumb">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $_post->ID, 'large' ); ?></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                <a href="<?php the_permalink(); ?>" class="post-date"><i class="zmdi zmdi-time"></i> <?php echo get_the_date(); ?></a>
                            </div>
                        </div>
                        <?php   }
                                wp_reset_postdata();
                            }
                            ?>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <h5 class="widget-title mb-30">Categorias</h5>

                        <!-- Catagories List -->
                        <?php wp_list_categories(array(
                                'orderby'    => 'name',
                                'show_count' => true,
                                'title_li' => ''
                            )); ?>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <h5 class="widget-title mb-30">Tags</h5>

                        <!-- Tag Cloud -->
                        <ul class="tag-cloud">
                            <li><?php wp_tag_cloud(); ?></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

<!-- Get Footer -->

<?php get_footer(); ?>
<?php endwhile;
endif; ?>