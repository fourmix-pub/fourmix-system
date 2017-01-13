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

    mix.copy(
        'node_modules/bootstrap-sass/assets/fonts/bootstrap',
        'public/fonts/bootstrap'
    ).copy(
        'node_modules/font-awesome/fonts',
        'public/fonts'
    ).copy(
        'node_modules/font-awesome/css/font-awesome.min.css',
        'resources/assets/css/font-awesome.css'
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
        'bootstrap-off-canvas-nav.css'
    ], 'public/css/app.css');

});
