var gulp = require('gulp');

gulp.task('css', function () {
    var postcss    = require('gulp-postcss');
    var sourcemaps = require('gulp-sourcemaps');
    var tailwindcss = require('tailwindcss');

    return gulp.src('config/src/css/styles.css')
        .pipe( sourcemaps.init() )
        .pipe( postcss([ 
            require('precss'), 
            require('autoprefixer'),
            tailwindcss('./config/tailwind.config.js')
            ]) 
            )
        .pipe( sourcemaps.write('.') )
        .pipe( gulp.dest('web/assets/css/') );
});
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();


gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "mulago.test"
    });
});