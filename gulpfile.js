var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.styles('style.css');
    mix.styles('bootstrap.min.css',
        'public/css/',
        'vendor/twbs/bootstrap/dist/css'
    );
    mix.scripts('bootstrap.min.js',
        'public/js/',
        'vendor/twbs/bootstrap/dist/js'
    );
});
