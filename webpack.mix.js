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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/header.scss', 'public/css')
    .sass('resources/scss/footer.scss', 'public/css')
    .sass('resources/scss/register.scss', 'public/css')
    .sass('resources/scss/login.scss', 'public/css')
    .sass('resources/scss/insert_new_product.scss', 'public/css')
    .sass('resources/scss/edit_product.scss', 'public/css')
    .sass('resources/scss/insert_category.scss', 'public/css')
    .sass('resources/scss/home.scss', 'public/css')
    .sass('resources/scss/search.scss', 'public/css')
    .sass('resources/scss/cart.scss', 'public/css')
    .sass('resources/scss/edit_cart.scss', 'public/css')
   
