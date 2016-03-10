'use strict';

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var http = require('http');
var express = require('express');
var del = require('del');
var runSequence = require('run-sequence');
var compress = require('compression');

var server = express();
var serverport = 8080;

gulp.task('clean', function() {
  return del('dist');
});

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
    	.pipe(gulp.dest('dist'));
  	return;
});

gulp.task('server', ['clean','deploy'], function() {

	server.use(function(req, res, next) {
	  res.header("Access-Control-Allow-Origin", "*");
	  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
	  next();
	});

	console.log('Acesse http://localhost:8080/index.html');

	server.use(compress());
	server.use(express.static('./dist'));
	server.listen(serverport);

});

gulp.task('dev', ['clean', 'deploy', 'server'], function() {
	console.log('Task completed')
});

gulp.task('build', ['clean', 'deploy'], function() {
	console.log('Task completed')
});

