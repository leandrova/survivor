'use strict';

var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    fileinclude = require('gulp-file-include');

gulp.task('deploy', ['clean'], function() {
	/* assets */
	console.log('Task - deploy - fonts');
	gulp.src('./app/assets/fonts/*.*')
    	.pipe(gulp.dest('dist/assets/fonts'));
    console.log('Task - deploy - images');
    gulp.src('./app/assets/images/*.*')
    	.pipe(gulp.dest('dist/assets/images'));
    gulp.src('./app/assets/images/escudos/*.*')
    	.pipe(gulp.dest('dist/assets/images/escudos'));
    gulp.src('./app/assets/images/jogadores/*.*')
    	.pipe(gulp.dest('dist/assets/images/jogadores'));
    gulp.src('./app/assets/images/temas/*.*')
    	.pipe(gulp.dest('dist/assets/images/temas'));
    console.log('Task - deploy - css');
	gulp.src('./app/css/*.*')
    	.pipe(gulp.dest('dist/css'));
    console.log('Task - deploy - js');
    gulp.src('./app/js/*.*')
    	.pipe(gulp.dest('dist/js'));
    console.log('Task - deploy - html');
    gulp.src('./app/*.html')
    	.pipe(fileinclude({}))
    	.pipe(gulp.dest('./dist'));
  	return;
});
