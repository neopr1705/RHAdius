const mix = require('laravel-mix');

// Mengompilasi file JavaScript dan SCSS ke folder public
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// Jika Anda menggunakan file Vue.js
// mix.js('resources/js/app.js', 'public/js').vue();

// Anda bisa menambahkan konfigurasi lainnya sesuai kebutuhan.
