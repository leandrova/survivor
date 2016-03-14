'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('styles', function() {
    
    gulp.src('./app/styles/*.*')
    	.pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/css'));
    
  	return;

});
