// First, include gulp and gulp-connect-php
var gulp          = require('gulp');
    connect       = require('gulp-connect-php');
    browserSync   = require('browser-sync');




// Second, create a task to start a PHP server
gulp.task('serve', gulp.series( function() {
  connect.server({}, function() {
    browserSync({
        proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch('**/*.php').on('change', function() {
    browserSync.reload();
  })
}));




// Third, set the `serve` task to be the default task
gulp.task('default', gulp.series('serve'));