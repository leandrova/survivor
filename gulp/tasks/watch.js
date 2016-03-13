'use strict';

var gulp = require('gulp'),
    browserSync = require('browser-sync');

gulp.task('watch', function() {
	console.log('Task watch')
	gulp.watch('./app/*.html', ['deploy']);
	gulp.watch("app/*.html").on('change', browserSync.reload);
});
