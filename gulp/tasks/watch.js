'use strict';

var gulp = require('gulp'),
    browserSync = require('browser-sync');

gulp.task('watch', function() {
	console.log('Task watch')
	gulp.watch('./app/**/*.*', ['deploy']).on('change', browserSync.reload);
});
