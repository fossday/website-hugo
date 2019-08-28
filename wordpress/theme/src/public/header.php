<!doctype html>
<head>
<html lang="pt-BR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<base href="<?php echo get_bloginfo( 'siteurl' );?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link href="" rel="alternate" type="application/rss+xml" title=""/>
<link href="" rel="feed" type="application/rss+xml" title=""/>

<meta name="robots" content="all,follow"/>
<meta name="googlebot" content="index,follow,snippet,archive"/>
<link rel="canonical" href="<?php echo get_bloginfo('siteurl'); ?>"/>
<meta property="og:locale" content="" />
<?php if(is_single()) {
    echo '<title>' . get_the_title() . ' - ' .  get_bloginfo( 'name' ) .'</title>';
    echo '<meta name="description" content="' . get_the_excerpt() . '"/>';
    echo '<meta property="og:type" content="article" />';
    echo '<meta property="og:title" content="' . get_the_title() .'"/>';
    echo '<meta property="og:url" content="' . get_the_permalink() .'"/>';
    echo '<meta property="og:site_name" content=""/>';
    echo '<meta property="og:image" content="' . get_the_post_thumbnail_url(get_the_ID(),array('750', '375')) .'"/>';
    echo '<meta property="article:author" content="'.  get_the_author_meta('facebook_profile') . '"/>';
    $tags = get_the_tags();
    if($tags){
        echo '<meta property="article:published_time" content="';
        foreach($tags as $item) {
            echo $item->name . ', ';
        };
        echo '">';
    };
    echo '<meta property="article:published_time" content="' . get_the_date() .'">';
    echo '<meta property="article:publisher" content="'.  get_option('facebook_field') . '" />';
    echo '<meta property="og:site_name" content="'. get_bloginfo( 'name' ). '" />';
    echo '<meta name="twitter:card" content="summary"/>';
    echo '<meta name="twitter:description" content=""/>';
    echo '<meta name="twitter:title" content=""/>';
    echo '<meta name="twitter:site" content=""/>';
    echo '<meta name="twitter:image" content=""/>';

} elseif(is_home()) {

    echo '<title>' . get_bloginfo( 'name' ) .' - ' . get_bloginfo( 'description' ) .'</title>';
    echo '<meta name="description" content="' . get_bloginfo( 'description' ) . '"/>';
    echo '<meta property="og:type" content="blog"/>';
    echo '<meta property="og:title" content="' . get_bloginfo('name') .' - '. get_bloginfo('description') . '"/>';
    echo '<meta property="og:description" content="'. get_option('description_field') .'"/>';
    echo '<meta property="og:url" content="' . get_bloginfo('siteurl') . '"/>';
    echo '<meta property="og:site_name" content="' . get_bloginfo('name') .'"/>';
    echo '<meta property="og:image" content="http://blog.careus.com.br/wp-content/uploads/2019/08/JCvf0gSuMuecn6ynpLIluA1fEIhiXfRptmdkfXUl.png"/>';
} ?>
<meta property="fb:admins" content=""/>
<meta property="fb:pages" content=""/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146056343-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo get_option('analytics_field'); ?>');
</script>

<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

<?php wp_head();?>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area <?php if(is_single() || is_archive()){ echo 'is-single'; }; ?>">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <?php the_custom_logo(); ?>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <?php wp_nav_menu( array(
                                 'theme_location' => 'header-menu',
                                 'container' => 'ul',
                                 'menu_class'=> '',) ); 
                            ?>
                            <!-- Get Tickets Button -->
                            <a href="<?php echo get_post_meta($post->ID, 'vega_events_submit_link', true) ?>" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Quero palestrar <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->