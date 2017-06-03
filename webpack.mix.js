let mix = require('laravel-mix');

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

mix.js(
    [
        'resources/assets/js/app.js',
        'resources/assets/js/creative.js',
        'resources/assets/js/jquery.js',
        'resources/assets/js/jquery.easing.js',
        'resources/assets/js/jquery.magnific-popup.js',
        'resources/assets/js/scrollreveal.js',
        'resources/assets/js/tether.js'
    ], 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
