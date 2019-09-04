<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_header(); ?>
<!-- End of Get Header  -->

<!-- Init content -->

<!-- Blog Area Start -->
<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Details Area -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="pr-lg-4 mb-100">
                    <!-- Post Content -->
                    <div class="post-details-content">

                        <!-- Post Title -->
                        <h4 class="post-title"><?php the_title(); ?></h4>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-date"><i class="zmdi zmdi-alarm-check"></i><?php the_date(); ?></a>
                        </div>

                        <?php the_content(); ?>

                    </div>

                    <!-- Post Tags & Social Info -->
                    <div class="post-tags-social-area mt-30 pb-5 d-flex flex-wrap align-items-center">

                        <!-- Author Social Info -->
                        <div class="author-social-info">
                            <a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>"><i
                                    class="fa fa-twitter"></i></a>
                            <a
                                href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
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