<section class="our-schedule-area bg-white section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="schedule-tab">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab"
                                aria-controls="step-one" aria-expanded="true">Manhã <br> <span>08h30min - 12h00min</span></a>
                        </li>
                        <!-- Nav Item -->
                        <li class="nav-item">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab"
                                aria-controls="step-two" aria-expanded="true">Tarde <br> <span>13h00min - 18h00min</span></a>
                        </li>
                    </ul>
                </div>

                <?php
                    $data = get_posts(array(
                        'showposts' => -1,
                        'post_type' => 'talks',
                        'meta_key' => 'vega_talks_time',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'city_events',
                            'field' => 'slug',
                            'terms' => $post->post_name)
                        ))
                    );
                    $morning = array();
                    $afternoon = array();

                    foreach ($data as $post) {
                        
                        if(get_post_meta($post->ID, 'vega_talks_period', true) == 'morning') {

                            $morning[] = $post;

                        }else {

                            $afternoon[] = $post;
                        }
                    }

                    wp_reset_postdata();
                ?>

                <!-- Tab Content -->
                <div class="tab-content" id="conferScheduleTabContent">
                    <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                        <!-- Single Tab Content -->
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-12">
                                <?php
                                        
                                        foreach ($morning as $post) { 
                                            setup_postdata($post); ?>

                                            <!-- Single Schedule Area -->
                                            <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                                                data-wow-delay="300ms">
                                                <!-- Single Schedule Thumb and Info -->
                                                <div class="single-schedule-tumb-info d-flex align-items-center">
                                                    <!-- Single Schedule Thumb -->
                                                    <div class="single-schedule-tumb">
                                                        <?php echo get_avatar(get_the_author_meta('user_email'), $size = '500', $default, $alt, $args = array('class' => 'round'));?>
                                                    </div>
                                                    <!-- Single Schedule Info -->
                                                    <div class="single-schedule-info">
                                                        <h6><?php echo get_the_title(); ?></h6>
                                                        <p>por <span><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></span></p>
                                                    </div>
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="schedule-time-place">
                                                    <p><i class="zmdi zmdi-time"></i> <?php echo get_post_meta($post->ID, 'vega_talks_time', true); ?></p>
                                                    <p><i class="fa fa-list"></i> <?php if(get_the_category()){foreach(get_the_category() as $category){ echo $category->name . '. '; }}; ?> </p>
                                                </div>
                                                <!-- Schedule Btn -->
                                                <a href="<?php the_permalink(); ?>" class="btn confer-btn">Veja mais <i
                                                        class="zmdi zmdi-long-arrow-right"></i></a>
                                            </div>

                                        <?php } ?>

                                </div>

                                <!-- More Schedule Btn -->
                                <div class="col-12">
                                    <div class="more-schedule-btn text-center mt-50 wow fadeInUp"
                                        data-wow-delay="300ms">
                                        <a href="#" class="btn confer-btn">Download em .pdf <i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                        <!-- Single Tab Content -->
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-12">
                                <?php
                                foreach ($afternoon as $post) { 
                                            setup_postdata($post); ?>
                                    <!-- Single Schedule Area -->
                                    <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                                        data-wow-delay="300ms">
                                        <!-- Single Schedule Thumb and Info -->
                                        <div class="single-schedule-tumb-info d-flex align-items-center">
                                            <!-- Single Schedule Thumb -->
                                            <div class="single-schedule-tumb">
                                                <?php echo get_avatar(get_the_author_meta('user_email'), $size = '500', $default, $alt, $args = array('class' => 'round'));?>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="single-schedule-info">
                                                <h6><?php echo get_the_title(); ?></h6>
                                                <p>por <span><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></span></p>
                                            </div>
                                        </div>
                                        <!-- Single Schedule Info -->
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-time"></i> <?php echo get_post_meta($post->ID, 'vega_talks_time', true); ?></p>
                                            <p><i class="fa fa-list"></i> <?php if(get_the_category()){foreach(get_the_category() as $category){ echo $category->name. '. '; }}; ?></p>
                                        </div>
                                        <!-- Schedule Btn -->
                                        <a href="<?php the_permalink(); ?>" class="btn confer-btn">Veja mais <i
                                                class="zmdi zmdi-long-arrow-right"></i></a>
                                    </div>
                                <?php }; ?>

                                    
                                </div>

                                <!-- More Schedule Btn -->
                                <div class="col-12">
                                    <div class="more-schedule-btn text-center mt-50 wow fadeInUp"
                                        data-wow-delay="300ms">
                                        <a href="#" class="btn confer-btn">Download em .pdf <i class="fa fa-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </div>
</section>