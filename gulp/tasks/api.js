'use strict';

var gulp = require('gulp'),
    fileinclude = require('gulp-file-include');

gulp.task('api', function() {
    
    gulp.src('./app/api/**/*.*')
    	.pipe(fileinclude({}))
    	.pipe(gulp.dest('./dist/api'));
  	return;

});
