<div class="map-area">
    <div class="row">
        <div class="col-sm-5 map-area-col">
            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_post_meta($post->ID, 'vega_events_iframe', true) ?>"></iframe>
        </div>
        <div class="col-sm-7 map-area-col">
            <div class="call-to-action-content text-center">
                <div class="call-to-action-heading">
                    <h4 class="text-white"><?php echo get_post_meta($post->ID, 'vega_events_location', true) ?></h4>
                </div>
                <div class="event-time">
                    <p><i class="zmdi zmdi-alarm-check"></i>
                        <?php echo gmstrftime('%d de %B de %Y',strtotime(get_post_meta($post->ID, 'vega_events_date', true))); ?>
                    </p>
                    <p><i class="zmdi zmdi-map"></i>
                        <?php echo get_post_meta($post->ID, 'vega_events_address', true) ?></p>
                </div>
                <div class="ticket-btn text-center">
                    <a href="<?php echo get_post_meta($post->ID, 'vega_events_map_link', true) ?>" target="_blank" class="btn confer-btn-white-2 mt-40">Ver no mapa <i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>