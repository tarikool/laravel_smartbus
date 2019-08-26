const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/local.scss', 'public/css/style.css');


mix.styles([
    'resources/assets/css/cs-skin-elastic.css',
    'resources/assets/css/style.css'
],'public/css/libs.css');



mix.scripts([
    'resources/assets/js/main.js',
],'public/js/libs.js');

// mix.js([
//     'resources/assets/js/local/bower_components/jquery/dist/jquery.min.js',
//     'resources/assets/js/local/bower_components/bootstrap/dist/js/bootstrap.min.js',
//     'resources/assets/js/local/plugins/input-mask/jquery.inputmask.js',
//     'resources/assets/js/local/plugins/input-mask/jquery.inputmask.date.extensions.js',
//     'resources/assets/js/local/plugins/input-mask/jquery.inputmask.extensions.js',
//     'resources/assets/js/local/bower_components/moment/min/moment.min.js',
//     'resources/assets/js/local/bower_components/bootstrap-daterangepicker/daterangepicker.js',
//     'resources/assets/js/local/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
//     'resources/assets/js/local/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js',
//     'resources/assets/js/local/plugins/timepicker/bootstrap-timepicker.min.js',
//     'resources/assets/js/local/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
//     'resources/assets/js/local/plugins/iCheck/icheck.min.js',
//     'resources/assets/js/local/bower_components/fastclick/lib/fastclick.js',
//     'resources/assets/js/local/dist/js/adminlte.min.js',
// ], 'public/js/scripts.js');