const mix = require('laravel-mix');
const glob = require('glob');
const { groupBy } = require('lodash');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.postCss('resources/css/slick/slick-theme.css', 'public/css/slick', [
//         //
//     ]);
// mix.postCss('resources/css/slick/slick.css', 'public/css/slick', [
//         //
//     ]);
glob.sync('resources/css/*.css', 'public/css').map(function(file) {
    mix.postCss(file, 'public/css').options({
        processCssUrls: false,
    });
});
glob.sync('resources/js/*.js', 'public/js').map(function(file) {
    mix.js(file, "public/js").autoload({
        "jquery": ['$', 'window.jQuery'],
    });
});
glob.sync('resources/sass/*.scss').map(function(file) {
    mix.sass(file, "public/css").options({
        processCssUrls: false,
    });
});

// mix.sass("resources/sass/app.scss", "public/css"); //この行を追加