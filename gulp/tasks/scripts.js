'use strict';

var gulp = require('gulp');

gulp.task('scripts', function() {
    
    gulp.src('./app/scripts/*.*')
    	.pipe(gulp.dest('dist/js'));

  	return;

});
