<section class="our-sponsor-client-area section-padding-0-6">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp our-sponsor-client-heading" data-wow-delay="300ms">
                    <h4>Patrocínio</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Our Sponsor area -->
                <div class="our-sponsor-area d-flex flex-wrap">
            
            <?php
                $sponsors = get_posts(array(
                    'showposts' => -1,
                    'post_type' => 'sponsors'
                    ));
                    
                    
                    foreach ($sponsors as $post) { 
                        setup_postdata($post);
                        
                    ?>

                    <!-- Single Sponsor -->
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID, array('500', '500')) ?></a>
                    </div>
                    <?php }; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp our-sponsor-client-heading" data-wow-delay="300ms">
                    <h4>Apoio</h4>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                
                <?php
                    $supporters = get_posts(array(
                        'showposts' => -1,
                        'post_type' => 'supporter'
                        ));
                        
                        foreach ($supporters as $post) { 
                            setup_postdata($post);
                            
                        ?>
    
                        <!-- Single supporter -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID, array('500', '500')) ?></a>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>

    </div>
</section>