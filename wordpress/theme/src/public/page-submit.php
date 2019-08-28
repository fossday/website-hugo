<?php /* Template Name: Submit Page */ ?>


<?php 

    $events = get_posts(array(
        'showposts' => 1,
        'post_type' => 'events'
    ));

    foreach ($events as $post) {
    
        setup_postdata($post);
?>

<?php get_header(); ?>
<!-- Get Header  -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-5-0" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <!-- About Content -->
                    <div class="col-12 col-md-6">
                        <div class="about-content-text mb-80">
                            <h6 class="wow fadeInUp" data-wow-delay="300ms"><?php echo get_the_title(); ?></h6>
                            <h3 class="wow fadeInUp" data-wow-delay="300ms"><?php echo get_the_excerpt(); ?></h3>
                            <p class="wow fadeInUp" data-wow-delay="300ms"><?php the_content(); ?></p>
                            <a href="<?php echo get_post_meta($post->ID, 'vega_events_submit_link', true) ?>" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Quero Palestrar <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- About Thumb -->
                    <div class="col-12 col-md-6">
                        <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/bg-img/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counter Up Area -->
            <div class="countdown-up-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <!-- Countdown Text -->
                            <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms" data-event-date="<?php echo get_post_meta($post->ID, 'vega_events_date', true) ?>">
                                <h6>Falta pouco</h6>
                                <h4><?php
                                    echo date('d F Y',strtotime(get_post_meta($post->ID, 'vega_events_date', true))); 
                                ?></h4>
                            </div>
                        </div>

                        <div class="col-12 col-md-9">
                            <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                                <div id="clock"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us And Countdown Area End -->

        <!-- Call to Action Area Start -->
        <section class="call-to-action-area bg-img bg-gradient-overlay jarallax section-padding-100" style="background-image: url(img/bg-img/14.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="call-to-action-content text-center">
                            <div class="call-to-action-heading">
                                <h6>Seja um palestrante</h6>
                                <h2>Submeter palestra</h2>
                            </div>
                            <div class="event-time">
                                <p><i class="zmdi zmdi-alarm-check"></i> 
                                <?php
                                    echo date('d F Y',strtotime(get_post_meta($post->ID, 'vega_events_date', true))); 
                                ?>
                                </p>
                                <p><i class="zmdi zmdi-map"></i> <?php echo get_post_meta($post->ID, 'vega_events_location', true) ?></p>
                            </div>
                        </div>

                        <div class="ticket-btn text-center">
                            <a href="<?php echo get_post_meta($post->ID, 'vega_events_submit_link', true) ?>" class="btn confer-btn-white-2 mt-40">Eu quero palestrar <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action Area End -->

    <?php }; ?>

        <!-- Our Speakings Area Start -->
        <section class="our-speaker-area">
            <div class="container">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                            <p class="text-white"><?php echo get_bloginfo('sitename'); ?></p>
                            <h4 class="text-white">Palestrantes <?php echo get_the_title(); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Get Submit link  -->
                    <?php $submit = get_post_meta($post->ID, 'vega_events_submit_link', true); ?>
                    <!-- End of get Submit link  -->

                    <!-- Get Speakers -->
                    <?php include "partials/render_speakers.php"; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- End of get Speakers -->

                    <div class="col-12">
                        <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                            <a class="btn confer-btn" href="<?php echo $submit ?>">Enviar palestra <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Speakings Area End -->

         <!-- Our Schedule Area Start -->
        <?php include "partials/schedules_part.php"; ?>
        <!-- Our Schedule Area End -->

        <?php 
            foreach ($events as $post) {
    
                setup_postdata($post);
         ?>

        <!-- Map Area -->
        <?php include "partials/map_area.php"; ?>

    <?php  }; ?>

    <!-- Our Sponsor And Client Area Start -->
        <?php include "partials/sponsors_area.php"; ?>
    <!-- Our Sponsor And Client Area End -->

<!-- Get Footer -->
<?php get_footer(); ?>