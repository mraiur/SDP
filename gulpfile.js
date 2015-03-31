var gulp = require('gulp'),
    concat = require('gulp-concat'),
    minifyCss = require('gulp-minify-css');

gulp.task('minify-css', function(){
    return gulp.src([
        'bower_components/components-font-awesome/css/font-awesome.min.css',
        'assets/main.css'
    ])
    .pipe( minifyCss() )
    .pipe( concat('app.css') )
    .pipe( gulp.dest('build'));

});


gulp.task('default', function(){
    gulp.run('minify-css');
});
