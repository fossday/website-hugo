const { mix } = require('laravel-mix');

mix.options({ processCssUrls: false})
.sass(
    'resources/sass/style.scss',
    'public/dist/app_bundle.css',
    { implementation: require('node-sass')}
)
.copy('resources/fonts','public/fonts')
.scripts('node_modules/jquery/dist/jquery.min.js','public/dist/jquery.min.js')
.scripts(
    [
        'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/owl.carousel2/dist/owl.carousel.min.js',
        'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
        'node_modules/wowjs/dist/wow.min.js',
        'node_modules/imagesloaded/imagesloaded.pkgd.min.js',
        'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
        'node_modules/jarallax/dist/jarallax.min.js',
        'node_modules/jarallax/dist/jarallax-video.min.js',
        'node_modules/jquery-waypoints/waypoints.min.js',
        'node_modules/counterup/jquery.counterup.min.js',
        'node_modules/jquery.easing/jquery.easing.min.js',
        'node_modules/jquery-countdown/dist/jquery.countdown.min.js',
        'resources/js/avoid.console.error.js',
        'resources/js/classy-nav.js',
        'resources/js/jquery.scrollup.min.js',
        'resources/js/active.js'
    ], 'public/dist/app_bundle.js'
);