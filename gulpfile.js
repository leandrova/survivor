'use strict';

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var http = require('http');
var express = require('express');
var del = require('del');
var runSequence = require('run-sequence');
var server = express();
var s; 
var serverport = 8080;

gulp.task('clean', function() {
  return del('dist');
});

gulp.task('deploy', ['clean'], function() {
	/* assets */
	gulp.src('./app/assets/fonts/*.*')
    	.pipe(gulp.dest('dist/assets/fonts'));
    gulp.src('./app/assets/images/*.*')
    	.pipe(gulp.dest('dist/assets/images'));
	gulp.src('./app/assets/css/*.*')
    	.pipe(uglify())
    	.pipe(gulp.dest('dist/assets/css'));
    gulp.src('./app/assets/js/*.*')
    	.pipe(uglify())
    	.pipe(gulp.dest('dist/assets/js'));
  	gulp.src('./app/*.html')
    	.pipe(gulp.dest('dist'));
  	return;
});

gulp.task('server', ['clean','deploy'], function() {

	server.all('/index.html', function(req, res) {
	  res.sendFile('modeloIntegracao.html', { root: 'dist' });
	});

	server.all('/js/atendimentoOnline.js', function(req, res) {
	  res.sendFile('atendimentoOnline.js', { root: 'dist/js' });
	});

	s = http.createServer(server);
	s.on('error', function(err){
	  if (err.code === 'EADDRINUSE'){
	    console.log(
	      'Development server is already started at port ' +
	      serverport
	    );
	  } else {
	    throw err;
	  }
	});

	console.log('Acesse http://localhost:8080/index.html');

	s.listen(serverport);

});

gulp.task('dev', ['clean', 'deploy', 'server'], function() {
	console.log('Task completed')
});

gulp.task('build', ['clean', 'deploy'], function() {
	console.log('Task completed')
});

