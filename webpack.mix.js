const mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/pages/home.scss', 'public/css');
mix.sass('resources/assets/sass/pages/guest.scss', 'public/css');
mix.sass('resources/assets/sass/pages/login.scss', 'public/css');
mix.js('resources/assets/js/pages/home.js', 'public/js');
mix.js('resources/assets/js/pages/guest.js', 'public/js');

// mix.autoload({
//     jquery: ['$', 'window.jQuery']
// });

mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
});

