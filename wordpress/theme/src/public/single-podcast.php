<!-- Get Header  -->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Init content -->
<main id="content" class="white-background" role="main">
  <div class="container container-masonry">
    <div class="row">
      <div class="podcast-head col sm-12 col-md-12">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2" style="background-image">
        <h4 class="single-title no-bottom"><?php the_title(); ?></h4>
        <p class="post-meta"><span><?php the_date(); ?></span></p>

        <p><?php the_excerpt(); ?></p>
        <img src="<?php echo get_post_meta($post->ID, '_sap_custom_image', true) ?>" width="100%" alt="Imagem em destaque <?php the_title(); ?>">
        <audio controls style="width:100%">
          <source src="<?php echo get_post_meta($post->ID, '_sap_mp3_url', true) ?>" type="audio/mpeg">
          Seu navegador não é suportado.
        </audio>
        <p><a href="{{ .Params.PodcastFeed }}">Assinar Feed</a> - <a href="<?php echo get_post_meta($post->ID, '_sap_mp3_url', true) ?>">Baixar Episódio em .mp3</a></p>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <?php the_content(); ?>
      </div>
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="sep"></div>
        <div class="fb-like" data-href="{{ .Site.Params.Facebook }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        <div class="sep"></div>
      </div>
    </div>

      <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="row">
          <div class="col-sm-6">
            <h5>Compartilhe nas suas redes sociais</h5>
            <p class="social-share no-bottom">
                <a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="social-link" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="social-link" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" class="social-link" target="_blank"><i class="fa fa-twitter"></i></a>
            </p>
          </div>
          <div class="col-sm-6">
            <p class="tags"><strong class="padding-bottom"> <?php the_tags() ?> </p>
          </div>
        </div>
        <div class="clear"></div>

        <div class="sep margin-2"></div>

        <h5>Outros podcasts</h5>
        <div class="owl-carousel owl-thumbs-2">
        <?php 
                $related = new WP_Query(
                    array(
                        'category__in'   => wp_get_post_categories( $post->ID ),
                        'posts_per_page' => 5,
                        'post_type' => 'podcast',
                        'post__not_in'   => array( $post->ID )
                    )
                );
                
                if( $related->have_posts() ) { 
                    while( $related->have_posts() ) { 
                        $related->the_post(); ?>

                        <div class="thumb dark-overlay">
                        <div class="photo">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail( $_post->ID, 'large' ); ?>
                                <span class="info"><span class="big-excerpt"><?php the_title(); ?></span></span>
                            </a>
                        </div>
                        </div>

                <?php   }
                    wp_reset_postdata();
                }
                ?>   

        </div>
        <div class="sep margin-4"></div>

        <div id="disqus_thread"></div>
        <div class="clear"></div>
        <div class="margin-6"></div>
      </div>
    </div>
  </div>
</main>
<?php endwhile; endif;?>
<!-- end of content area -->

<!-- Get Footer -->

<?php get_footer(); ?>