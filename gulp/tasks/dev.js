'use strict';

var gulp = require('gulp');

gulp.task('dev', ['clean', 'deploy', 'server'], function() {
	console.log('Task completed')
});