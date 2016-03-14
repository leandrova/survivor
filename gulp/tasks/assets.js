'use strict';

var gulp = require('gulp');

gulp.task('assets', function() {
    
    gulp.src('./app/assets/**/*.*')
    	.pipe(gulp.dest('dist/assets'));
    
  	return;

});
