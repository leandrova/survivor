'use strict';

var gulp = require('gulp'),
    browserSync = require('browser-sync');

gulp.task('watch', function() {
	
	gulp.watch('./app/assets/**/*.*', ['assets'])
		.on('change', browserSync.reload);

	gulp.watch('./app/scripts/**/*.*', ['scripts'])
		.on('change', browserSync.reload);

	gulp.watch('./app/styles/**/*.*', ['styles'])
		.on('change', browserSync.reload);

	gulp.watch('./app/pages/**/*.*', ['pages'])
		.on('change', browserSync.reload);

});
