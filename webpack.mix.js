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
 */

 mix.styles([
    'resources/assets/front/wgPiccoloTheme/css/bootstrap-responsive.css',
    'resources/assets/front/wgPiccoloTheme/css/bootstrap.css',
    'resources/assets/front/wgPiccoloTheme/css/custom-styles.css',
    'resources/assets/front/wgPiccoloTheme/css/flexslider.css',
    'resources/assets/front/wgPiccoloTheme/css/prettyPhoto.css',
    'resources/assets/front/wgPiccoloTheme/css/style-ie.css',
], 'public/assets/front/css/main.css')


mix.scripts([
    'resources/assets/front/wgPiccoloTheme/js/bootstrap.js',
    'resources/assets/front/wgPiccoloTheme/js/jquery.custom.js',
    'resources/assets/front/wgPiccoloTheme/js/jquery.easing.1.3.js',
    'resources/assets/front/wgPiccoloTheme/js/jquery.flexslider.js',
    'resources/assets/front/wgPiccoloTheme/js/jquery.prettyPhoto.js',
    'resources/assets/front/wgPiccoloTheme/js/jquery.quicksand.js',
], 'public/assets/front/js/script.js')

mix.copyDirectory('resources/assets/front/wgPiccoloTheme/img', 'public/assets/front/img')