const mix = require('laravel-mix');

mix.styles([
        'resources/assets/css/bootstrap.css'
    ], 'public/css/app.css')
    .scripts([
        'resources/assets/js/jquery-3.3.1.js',
        'resources/assets/js/bootstrap.bundle.js'
    ], 'public/js/app.js');