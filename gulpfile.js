const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    // bootstrap
    mix.copy(
        'node_modules/bootstrap-sass/assets/fonts/bootstrap',
        'public/fonts/bootstrap'
    );

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


    mix.sass(
        'app.scss',
        'resources/assets/css/lib.css'
    )
        .webpack('app.js');

    mix.styles([
        'lib.css',
        'main.css',
        'callouts.css',
        'font-awesome.css',
        'bootstrap-select.css',
        'bootstrap-off-canvas-nav.css',
        'bootstrap-datetimepicker.css',
        'bootstrap-markdown.css'
    ], 'public/css/app.css');


    mix.scripts([
        'marked.js',
        'moment.js',
        'locales.js',
        'jquery.js'
    ], 'public/js/lib.js');

});
