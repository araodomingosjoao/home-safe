const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([

    "https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500",
    // "resources/views/site/assets/fonts/icomoon/style.css",
    "resources/views/site/assets/css/bootstrap.min.css",
    "resources/views/site/assets/css/magnific-popup.css",
    "resources/views/site/assets/css/jquery-ui.css",
    "resources/views/site/assets/css/owl.carousel.min.css",
    "resources/views/site/assets/css/owl.theme.default.min.css",
    "resources/views/site/assets/css/bootstrap-datepicker.css",
    "resources/views/site/assets/css/mediaelementplayer.css",
    "resources/views/site/assets/css/animate.css",
    // "resources/views/site/assets/fonts/flaticon/font/flaticon.css",
    "resources/views/site/assets/css/fl-bigmug-line.css",
    "resources/views/site/assets/css/aos.css",
    "resources/views/site/assets/css/style.css",

], 'public/site/assets/css/style.css')

    .scripts([

        "resources/views/site/assets/js/jquery-3.3.1.min.js",
        "resources/views/site/assets/js/jquery-migrate-3.0.1.min.js",
        "resources/views/site/assets/js/jquery-ui.js",
        "resources/views/site/assets/js/popper.min.js",
        "resources/views/site/assets/js/bootstrap.min.js",
        "resources/views/site/assets/js/owl.carousel.min.js",
        "resources/views/site/assets/js/mediaelement-and-player.min.js",
        "resources/views/site/assets/js/jquery.stellar.min.js",
        "resources/views/site/assets/js/jquery.countdown.min.js",
        "resources/views/site/assets/js/jquery.magnific-popup.min.js",
        "resources/views/site/assets/js/bootstrap-datepicker.min.js",
        "resources/views/site/assets/js/aos.js",
        "resources/views/site/assets/js/main.js"

    ], 'public/site/assets/js/script.js')
        .version();
