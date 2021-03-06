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

// アイコン
mix.copy(
    'node_modules/font-awesome/fonts',
    'public/fonts'
).copy(
    'node_modules/font-awesome/css/font-awesome.min.css',
    'resources/assets/css/font-awesome.css'
);

//　bootstrap：selectプラグイン
mix.copy(
    'node_modules/bootstrap-select/dist/css/bootstrap-select.min.css',
    'resources/assets/css/bootstrap-select.css'
).copy(
    'node_modules/bootstrap-select/dist/js/bootstrap-select.min.js',
    'resources/assets/js/bootstrap-select.js'
);

// bootstrap：Markdownプラグイン
mix.copy(
    'node_modules/bootstrap-markdown/css/bootstrap-markdown.min.css',
    'resources/assets/css/bootstrap-markdown.css'
).copy(
    'node_modules/bootstrap-markdown/js/bootstrap-markdown.js',
    'resources/assets/js/bootstrap-markdown.js'
);

// Markdownプラグイン
mix.copy(
    'node_modules/marked/lib/marked.js',
    'resources/assets/js/marked.js'
);

// bootstrap：カレンダープラグイン
mix.copy(
    'node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
    'resources/assets/css/bootstrap-datetimepicker.css'
).copy(
    'node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
    'resources/assets/js/bootstrap-datetimepicker.js'
);

// カレンダープラグイン
mix.copy(
    'node_modules/moment/min/moment.min.js',
    'resources/assets/js/moment.js'
).copy(
    'node_modules/moment/min/locales.min.js',
    'resources/assets/js/locales.js'
);

// jquery
mix.copy(
    'node_modules/jquery/dist/jquery.min.js',
    'resources/assets/js/jquery.js'
);

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', '../resources/assets/css/lib.css');

mix.sass('resources/assets/sass/materialFullCalendar.scss', '../resources/assets/css/calendar.css');

mix.styles([
    'resources/assets/css/lib.css',
    'resources/assets/css/main.css',
    'resources/assets/css/table.css',
    'resources/assets/css/header.css',
    'resources/assets/css/callouts.css',
    'resources/assets/css/font-awesome.css',
    'resources/assets/css/bootstrap-select.css',
    'resources/assets/css/bootstrap-off-canvas-nav.css',
    'resources/assets/css/bootstrap-datetimepicker.css',
    'resources/assets/css/bootstrap-markdown.css',
    'resources/assets/css/button.css',
    'resources/assets/css/radius.css',
    'resources/assets/css/daily.css',
    'resources/assets/css/modal.css',
    'resources/assets/css/pageloader.css',
    'resources/assets/css/fullcalendar.css',
], 'public/css/app.css');


mix.scripts([
    'resources/assets/js/marked.js',
    'resources/assets/js/moment.js',
    'resources/assets/js/locales.js',
    'resources/assets/js/jquery.js',
    'resources/assets/js/pageloader.js',
    'resources/assets/js/fullcalendar.js',
    'resources/assets/js/ja.js',
], 'public/js/lib.js');
