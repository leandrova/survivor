'use strict';

var gulp = require('gulp');
var runSequence = require('run-sequence');

gulp.task('deploy', ['clean'], function() {
  	return runSequence(
    'assets',
    'styles',
    'scripts',
    'pages',
    'api'
  );
});
