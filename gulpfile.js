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


gulp.task('fonts', function(){
    gulp.src('bower_components/components-font-awesome/fonts/**/*{ttf,woff,eof,svg}')
        .pipe( gulp.dest('fonts') );
});

gulp.task('default', function(){
    gulp.run('minify-css', 'fonts');
});
