require('dotenv').config();
const mix = require('laravel-mix');
const base_url = process.env.APP_URL || 'http://localhost/public';
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

mix.sass('public/scss/style.scss', 'public/css').options({
    processCssUrls: false
});

mix.browserSync({
    proxy: base_url,
    notify: false
});
