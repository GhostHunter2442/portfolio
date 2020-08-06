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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css');


    //js
    mix.copy('resources/js/fontend/jquery.min.js','public/js');
    mix.copy('resources/js/fontend/jquery-migrate-3.0.1.min.js','public/js');
    mix.copy('resources/js/fontend/popper.min.js','public/js');
    mix.copy('resources/js/fontend/bootstrap.min.js','public/js');
    mix.copy('resources/js/fontend/jquery.easing.1.3.js','public/js');
    mix.copy('resources/js/fontend/jquery.waypoints.min.js','public/js');
    mix.copy('resources/js/fontend/jquery.stellar.min.js','public/js');
    mix.copy('resources/js/fontend/owl.carousel.min.js','public/js');
    mix.copy('resources/js/fontend/jquery.magnific-popup.min.js','public/js');
    mix.copy('resources/js/fontend/jquery.animateNumber.min.js','public/js');
    mix.copy('resources/js/fontend/scrollax.min.js','public/js');
    mix.copy('resources/js/fontend/google-map.js','public/js');
    mix.copy('resources/js/fontend/main.js','public/js');


    //css
    mix.copy('resources/css/animate.css','public/css');
    mix.copy('resources/css/aos.css','public/css');
    mix.copy('resources/css/owl.carousel.min.css','public/css');
    mix.copy('resources/css/owl.theme.default.min.css','public/css');
    mix.copy('resources/css/magnific-popup.css','public/css');
    mix.copy('resources/css/flaticon.css','public/css');

