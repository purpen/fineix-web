var elixir = require('laravel-elixir');

var gulp = require('gulp'),
    del = require('del');

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

// 清理旧文件 
gulp.task('clean', function(cb){
    del(['public/assets/*', 'public/build/*'], cb); 
});

elixir(function(mix) {
    mix.task('clean');
});

elixir(function(mix) {
    mix
    .sass(['app.scss',], 'public/assets/css/base.css')
});

elixir(function(mix) {
    mix
        .scripts(['base.js'], 'public/assets/js/base.js')
        .scripts(['jquery.min.js'], 'public/assets/js/jquery.min.js')
});


elixir(function(mix) {
    mix
        .copy('resources/assets/js/jquery.min.js','public/build/assets/js/jquery.min.js')
        .copy('resources/assets/js/swiper.min.js','public/build/assets/js/swiper.min.js')
        .copy('resources/assets/fonts/', 'public/build/assets/fonts/');
});

// 版本号码缓存必须放在编译之后
elixir(function(mix) {
    mix
        .version([
                'assets/css/base.css',
                'assets/js/base.js'
            ]);
});


