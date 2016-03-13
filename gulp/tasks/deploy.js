'use strict';

var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    fileinclude = require('gulp-file-include'),
    sass = require('gulp-sass');

gulp.task('deploy', ['clean'], function() {
    
    console.log('Task - deploy - images');
    gulp.src('./app/assets/**/*.*')
    	.pipe(gulp.dest('dist/assets'));
    
    console.log('Task - deploy - css');
	gulp.src('./app/styles/*.*')
    	.pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/css'));
    
    console.log('Task - deploy - js');
    gulp.src('./app/js/*.*')
    	.pipe(gulp.dest('dist/js'));

    console.log('Task - deploy - html');
    gulp.src('./app/pages/**/*.*')
    	.pipe(fileinclude({}))
    	.pipe(gulp.dest('./dist'));
  	return;

});
