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
    .js('resources/js/front/main.js', 'public/js/front')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/front/main.scss', 'public/css/front')
    .sourceMaps();
mix.copyDirectory('resources/images', 'public/images');
