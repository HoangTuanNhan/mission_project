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

mix.scripts([
        'node_modules/mustache/mustache.min.js',
        'node_modules/jquery-pjax/jquery.pjax.js',
        'resources/assets/js/user.js',
    ], 'public/js/user.js')
   .sass('resources/assets/sass/app.scss', 'public/css');
