<!-- Blog Sidebar Area -->
<div class="col-12 col-md-6 col-lg-4 col-xl-3">
    <div class="confer-sidebar-area mb-100">


        <!-- Single Widget Area -->
        <div class="single-widget-area">
            <!-- Post Author Widget -->
            <div class="post-author-widget">
                <!-- Thumbnail -->
                <div class="post-author-avatar">
                    <img src="img/bg-img/50.jpg" alt="">
                </div>
                <!-- Author Content -->
                <div class="post-author-content">
                    <h5>Crystal Perkins</h5>
                    <span>Photographer</span>
                    <p>On the other hand, de-nounce with righteous</p>
                </div>
                <!-- Social Info -->
                <div class="author-social-info">
                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                    <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                </div>
            </div>
        </div>


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