'use strict';

var gulp = require('gulp'),
    fileinclude = require('gulp-file-include');

gulp.task('pages', function() {
    
    gulp.src('./app/pages/**/*.*')
    	.pipe(fileinclude({}))
    	.pipe(gulp.dest('./dist'));
  	return;

});
