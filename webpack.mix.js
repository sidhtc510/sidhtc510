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

// mix.js('resources/js/app.js', 'public/js')
// .postCss('resources/css/app.css', 'public/css', [

// ]);
// 


/**
 * 
 * 
 * ADMIN
 * 
 */
mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/plugins/select2/css/select2.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/css/main.css',
], 'public/assets/admin/css/admin.css')


mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
    'resources/assets/admin/plugins/bs_custom_file_input/bs-custom-file-input.js',
], 'public/assets/admin/js/admin.js')

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts')
mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img')

mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map')
mix.copy('resources/assets/admin/js/adminlte.min.js.map', 'public/assets/admin/js/adminlte.min.js.map')


/**
 * 
 * 
 * 
 * FRONTEND
 * resources/assets/front/bst
 * 
 * 
 */

mix.styles([

    'resources/assets/front/bst/vendor/animate.css/animate.min.css',
    'resources/assets/front/bst/vendor/aos/aos.css',
    'resources/assets/front/bst/vendor/bootstrap/css/bootstrap.min.css',
    'resources/assets/front/bst/vendor/bootstrap-icons/bootstrap-icons.css',
    'resources/assets/front/bst/vendor/glightbox/css/glightbox.min.css',
    'resources/assets/front/bst/vendor/remixicon/remixicon.css',
    'resources/assets/front/bst/vendor/swiper/swiper-bundle.min.css',
    'resources/assets/front/bst/css/style.css',


], 'public/assets/front/css/main.css')


mix.styles([

    'resources/assets/admin/css/main.css'

], 'public/assets/admin/css/assemblyAdmin.css')






mix.scripts([
    'resources/assets/front/bst/vendor/aos/aos.js',
    'resources/assets/front/bst/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/front/bst/vendor/glightbox/js/glightbox.min.js',
    'resources/assets/front/bst/vendor/isotope-layout/isotope.pkgd.min.js',
    'resources/assets/front/bst/vendor/php-email-form/validate.js',
    'resources/assets/front/bst/vendor/swiper/swiper-bundle.min.js',
    'resources/assets/front/bst/vendor/waypoints/noframework.waypoints.js',
    'resources/assets/front/bst/js/main.js',

], 'public/assets/front/js/script.js')

mix.copyDirectory('resources/assets/front/bst/img', 'public/assets/front/img')